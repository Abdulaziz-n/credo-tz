<?php

namespace App\Http\Services;

use App\Models\Prize;
use Illuminate\Support\Facades\Http;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Log;

class SendMoneyService
{
    public function sendMoney($account, $value)
    {
        try {
            $send = Http::withHeaders(['authToken' => $this->token()])->get(  "https:nbu.uz/openapi/v1/transaction/?account={$account}/?value={$value}")->throw()->json();
        }catch (\Exception $exception){
            Log::error( "Bank Transaction account = {$account}, value = {$value} ".$exception);
        }

        return $send;

    }

    public function sendPrize()
    {
        $prize = ActivityLog::query()
            ->where('prize.slug', 'money')
            ->where('send', false)->get();

        return $this->sendMoney($prize['user']['account'], $prize['prize']['value']);
    }
}
