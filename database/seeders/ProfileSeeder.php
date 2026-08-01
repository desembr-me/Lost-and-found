<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Profile::create([
            'user_id' => 3,
            'alamat' => 'Jl. Merdeka No. 1',
            'no_telepon' => '081234567890',
        ]);

        Profile::create([
            'user_id' => 2,
            'alamat' => 'Jl. Sudirman No. 10',
            'no_telepon' => '082345678901',
        ]);
    }
}
