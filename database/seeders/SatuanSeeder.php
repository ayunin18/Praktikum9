<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('satuans')->insert([
            [
            'KodeSatuan' => 'PCS',
            'NamaSatuan' => 'Pieces',
            ],

            [
            'KodeSatuan' => 'ITEM',
            'NamaSatuan' => 'Item',
            ]
        ]);
    }
}
