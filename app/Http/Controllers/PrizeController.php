<?php

namespace App\Http\Controllers;

use App\Http\Services\SendMoneyService;
use App\Http\Services\SetPointsService;
use App\Models\Prize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
class PrizeController extends Controller
{
    public function getRandomPrize()
    {
        $prize = Prize::query()->with('type')->inRandomOrder()->first();

        return $prize;
    }

    public function setPrize(Request $request)
    {
        $prize = Prize::query()->with('type')
            ->where('id', $request->input('id'))
            ->where(function ($query) {
                $query->where('count', '>', is_integer(0))
                    ->orWhere('unlimited', true);
            })->get();

        $prize_type = $prize[0]['type']['slug'];

        try {
            switch ($prize_type){
                case 'money':
                    (new SendMoneyService())->sendMoney(auth()->user()->bank_account, $prize[0]['value']);
                    break;
                case 'points':
                    (new SetPointsService())->setPoint(auth()->user()->id, $prize[0]['value']);
                    break;
                case 'object':
                    Mail::to(auth()->user()->email)->send(new OrderMail($prize[0]['type']));
                    break;
            }
        }catch (\Exception $exception){
            return $exception;
        }

        return response()->json('set prize successfully')->setStatusCode(200);
    }
}
