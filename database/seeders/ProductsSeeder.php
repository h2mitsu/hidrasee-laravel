<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'nama_produk' => 'Galon 5 Liter Depot Surga',
            'harga' => 14500,
            'stok' => 10,
            'kota_id' => 1,
            'depot_id' => 1,
            'gambar' => 'galonSurga.png',
            'deskripsi' => 'Galon 5 Liter yang tersedia di Depot Surga',
        ]);
        DB::table('products')->insert([
            'nama_produk' => 'Galon 5 Liter Depot Rahmat',
            'harga' => 15000,
            'stok' => 20,
            'kota_id' => 2,
            'depot_id' => 2,
            'gambar' => 'galonRahmat.png',
            'deskripsi' => 'Galon 5 Liter yang tersedia di Depot Rahmat',
        ]);
        DB::table('products')->insert([
            'nama_produk' => 'Galon 5 Liter Depot Suci',
            'harga' => 14500,
            'stok' => 30,
            'kota_id' => 3,
            'depot_id' => 3,
            'gambar' => 'galonSuci.png',
            'deskripsi' => 'Galon 5 Liter yang tersedia di Depot Suci',
        ]);
        DB::table('products')->insert([
            'nama_produk' => 'Galon 5 Premium Supreme',
            'harga' => 5000000,
            'stok' => 30,
            'kota_id' => 3,
            'depot_id' => 4,
            'gambar' => 'galonSupreme.png',
            'deskripsi' => 'Galon Hypebeast harga mahal bgt',
        ]);
        DB::table('products')->insert([
            'nama_produk' => 'Galon Dior',
            'harga' => 100000000,
            'stok' => 30,
            'kota_id' => 3,
            'depot_id' => 5,
            'gambar' => 'galonDior.png',
            'deskripsi' => 'Galon 5 Liter yang tersedia di Depot Suci',
        ]);
    }
}
