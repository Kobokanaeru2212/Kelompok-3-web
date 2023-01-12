<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokters')->insert([
            'name'=>'Dwi Indriyani S',
            'jenis_kelamin'=>'perempuan',
            'usia'=>21,
        ]);
        DB::table('dokters')->insert([
            'name'=>'Nur Trisna Ayu',
            'jenis_kelamin'=>'perempuan',
            'usia'=>21,
        ]);
        DB::table('dokters')->insert([
            'name'=>'Rizki Ferdiansyah',
            'jenis_kelamin'=>'laki-laki',
            'usia'=>21,
        ]);
        DB::table('dokters')->insert([
            'name'=>'Nadia Nandarisha',
            'jenis_kelamin'=>'perempuan',
            'usia'=>21,
        ]);
    }
}
