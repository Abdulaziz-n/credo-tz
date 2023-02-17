<?php

namespace App\Http\Services;


use App\Models\User;
use Illuminate\Support\Facades\Log;

class SetPointsService
{
    public function setPoint($user, $value)
    {
        try {
            $user = User::query()->where('id', $user);
        }catch (\Exception $exception){
            return Log::error($exception);
        }

        return $user;

    }
}
