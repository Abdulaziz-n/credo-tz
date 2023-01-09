<?php

namespace Database\Seeders;

use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::query()->create([
            'room_number' => 1,
            'start_reserve_date' => '07-01-2023 17:00:00',
            'end_reserve_date' => '07-01-2023 17:35:00',
            'user_id' => 1
        ]);
        Room::query()->create([
            'room_number' => 5,
            'start_reserve_date' => '08-01-2023 14:00:00',
            'end_reserve_date' => '08-01-2023 16:25:00',
            'user_id' => 1
        ]);
        Room::query()->create([
            'room_number' => 4,
            'start_reserve_date' => '07-01-2023 12:00:00',
            'end_reserve_date' => '07-01-2023 13:00:00',
            'user_id' => 1
        ]);
        Room::query()->create([
            'room_number' => 3,
            'start_reserve_date' => '09-01-2023 10:00:00',
            'end_reserve_date' => '09-01-2023 11:15:00',
            'user_id' => 1
        ]);
        Room::query()->create([
            'room_number' => 2,
            'start_reserve_date' => '08-01-2023 09:00:00',
            'end_reserve_date' => '08-01-2023 09:35:00',
            'user_id' => 1
        ]);
    }
}
