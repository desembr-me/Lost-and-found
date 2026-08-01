<?php

namespace Database\Seeders;

use App\Models\Claim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClaimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Claim::create([
            'id' => 1,
            'user_id' => 4,
            'report_id' => 1,
            'deskripsi_klaim' => 'kayaknya punyaku itu deh',
            'status' => 'pending',
        ]);
    }
}
