<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Admin
        User::create([
            'id' => 1,
            'name' => 'Admin Kun',
            'email' => 'admin@unsulbar.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Staff
        User::create([
            'id' => 3,
            'name' => 'Staff Kun',
            'email' => 'staff@unsulbar.com',
            'password' => Hash::make('password'),
            'role' => 'staff',
        ]);

        // User biasa
        User::create([
            'id' => 2,
            'name' => 'Alex Kun',
            'email' => 'user@unsulbar.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        User::create([
            'id' => 4,
            'name' => 'Mas Kun',
            'email' => 'mas@unsulbar.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
    }
}
