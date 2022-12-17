<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('depots')->insert([
            'nama_depot' => 'Depot Surga',
        ]);
        DB::table('depots')->insert([
            'nama_depot' => 'Depot Rahmat',
        ]);
        DB::table('depots')->insert([
            'nama_depot' => 'Depot Suci',
        ]);
        DB::table('depots')->insert([
            'nama_depot' => 'Depot Supreme',
        ]);
        DB::table('depots')->insert([
            'nama_depot' => 'Depot Dior',
        ]);
    }
}
