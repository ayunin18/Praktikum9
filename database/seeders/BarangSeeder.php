<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            'KodeBarang' => 'JK56',
            'NamaBarang' => 'Tas',
            'HargaBarang' => '400000',
            'DeskripsiBarang' => 'Tas berbahan Kulit',
            'satuans_id' => 1,
        
        ]);
    }
}








