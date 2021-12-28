<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelanggans = [
            [
                'name' => 'PRIESCA LEYLYA SYAFITRI',
                'jenis kelamin' => 'Perempuan',
                'phone_number' => '081803201717',
                'alamat' => 'Sidoarjo',
            ],
            [
                'name' => 'LAILATUL MUFIDA',
                'jenis kelamin' => 'Perempuan',
                'phone_number' => '0835185581579',
                'alamat' => 'Mojokerto',
            ],
            [
                'name' => 'FADHIL BASO',
                'jenis kelamin' => 'Laki - laki',
                'phone_number' => '0826517142975',
                'alamat' => 'Makasar',
            ],
        ];

        DB::table('pelanggans')->insert($pelanggans);
    }
}