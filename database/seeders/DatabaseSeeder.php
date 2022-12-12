<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('products')->insert([
            'nama_product' => 'Galon Pristine',
            'harga' => 10000,
            'stok' => 10,
            'deskripsi' => 'Baju keren',
            'gambar' => 'baju.jpg',
            'kota_id' => 1,
        ]);
        DB::table('products')->insert([
            'nama_product' => 'Galon Aqua',
            'harga' => 10000,
            'stok' => 10,
            'deskripsi' => 'Celana keren',
            'gambar' => 'celana.jpg',
            'kota_id' => 1,
        ]);
        DB::table('products')->insert([
            'nama_product' => 'Galon Nestle',
            'harga' => 10000,
            'stok' => 10,
            'deskripsi' => 'Sepatu keren',
            'gambar' => 'sepatu.jpg',
            'kota_id' => 1,
        ]);
    }
}
