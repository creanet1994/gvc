<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'testAdmin',
            'email' => 'testAdmin@gmail.com',
            'password' => Hash::make('password'),
        ])->assignRole('admin');

        User::create([
            'name' => 'testUser',
            'email' => 'testUser@gmail.com',
            'password' => Hash::make('password'),
        ])->assignRole('user');

    }
}