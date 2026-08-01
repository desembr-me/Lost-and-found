<?php

namespace Database\Seeders;

use App\Models\UserItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        UserItem::create([
            'user_id' => 4,
            'item_id' => 1,
            'role' => 'pemilik',
        ]);

        UserItem::create([
            'user_id' => 2,
            'item_id' => 2,
            'role' => 'penemu',
        ]);
    }
}
