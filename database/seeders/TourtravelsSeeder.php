<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class TourtravelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tourtravels = [
            [
                'Tujuan' => 'Bali',
                'Harga' => '1500000',
            ],
            [
                'Tujuan' => 'Makassar',
                'Harga' => '2200000',
            ],
            [
                'Tujuan' => 'Labuan Bajo',
                'Harga' => '5000000',
            ],
        ];

        DB::table('tourtravels')->insert($tourtravels);
    }
}
