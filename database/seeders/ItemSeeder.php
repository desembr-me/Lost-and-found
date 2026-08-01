<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'id' => 1,
            'nama_barang' => 'Tas Sekolah Biru',
            'warna' => 'Biru',
            'ciri_khusus' => 'Ada stiker One Piece di depan',
            'type' => 'hilang',
        ]);

        Item::create([
            'id' =>2,
            'nama_barang' => 'Handphone Samsung A12',
            'warna' => 'Hitam',
            'ciri_khusus' => 'Layar retak di pojok kanan atas',
            'type' => 'ditemukan',
        ]);

        Item::create([
            'id' =>3,
            'nama_barang' => 'Handphone oppo A12',
            'warna' => 'silver',
            'ciri_khusus' => 'casingnya warna merah',
            'type' => 'ditemukan',
        ]);
    }
}
