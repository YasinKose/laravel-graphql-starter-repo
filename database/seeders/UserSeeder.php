<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => "Yasin Köse",
            'email' => "yasin@koseyasin.com",
            'password' => \Hash::make("123456789aA?")
        ]);
    }
}
