<?php

namespace App\Http\Controllers;

use App\Mail\RoomOrderMail;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SetOrderController extends Controller
{
    public function setOrder(Request $request)
    {

        $room = Room::query()->where('start_reserve_date', ">=" , $request->input('start_reserve_date'))
            ->where('end_reserve_date', "<=", $request->input('end_reserve_date'))->get();

        if (!empty($room)){

            Mail::to('nasrulaevaziz@gmail.com')->send(new RoomOrderMail($room));
            return $room;
        }

        return $room;

    }
}
