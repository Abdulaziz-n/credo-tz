<?php

namespace Database\Seeders;

use App\Models\Prize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prize::query()->create([
            'prize_types_id' => 1,
            'value' => 10500,
            'count' => 5,
            'unlimited' => false
        ]);

        Prize::query()->create([
            'prize_types_id' => 1,
            'value' => 15000,
            'count' => 5,
            'unlimited' => false
        ]);

        Prize::query()->create([
            'prize_types_id' => 2,
            'value' => 100,
            'count' => null,
            'unlimited' => true
        ]);

        Prize::query()->create([
            'prize_types_id' => 2,
            'value' => 200,
            'count' => null,
            'unlimited' => true
        ]);

        Prize::query()->create([
            'prize_types_id' => 3,
            'value' => 1,
            'count' => 6,
            'unlimited' => false
        ]);

    }

}
