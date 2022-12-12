<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kotas')->insert([
            'nama_kota' => 'Yogyakarta',
        ]);
        DB::table('kotas')->insert([
            'nama_kota' => 'Sleman',
        ]);
        DB::table('kotas')->insert([
            'nama_kota' => 'Bantul',
        ]);
    }
}
