<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'name' => 'Admin',
            'email' => 'admin@credo.uz',
            'password' => bcrypt('password'),
            'bank_account' => 8600530411111111
        ]);
    }

}
