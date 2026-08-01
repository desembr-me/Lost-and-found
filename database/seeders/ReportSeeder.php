<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Report::create([
            'id' => 1,
            'user_id' => 3,
            'item_id' => 1,
            'lokasi' => 'Gedung A, Lantai 2',
            'tanggal' => '2025-05-01',
            'status' => 'pending',
        ]);

        Report::create([
            'id' => 2,
            'user_id' => 3,
            'item_id' => 2,
            'lokasi' => 'Gedung B, Lantai 1',
            'tanggal' => '2025-05-03',
            'status' => 'disetujui',
        ]);

        Report::create([
            'user_id' => 3,
            'item_id' => 3,
            'lokasi' => 'Fakultas Teknik,ICT Lab 4',
            'tanggal' => '2025-05-10',
            'status' => 'ditolak',
        ]);
    }
}
