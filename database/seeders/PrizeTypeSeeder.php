<?php

namespace Database\Seeders;

use App\Models\PrizeType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrizeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PrizeType::query()->create([
           'name' => 'Money ',
           'slug' => 'money',
        ]);

        PrizeType::query()->create([
           'name' => 'Ball points ',
           'slug' => 'points',
        ]);

        PrizeType::query()->create([
           'name' => 'Watch TV ',
           'slug' => 'object',
        ]);
    }
}
