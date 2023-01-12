<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pasien')->insert([
            'name'=>'zahran',
            'penyakit'=>'demam',
            'jenis_kelamin'=>'laki-laki',
            'usia'=> 18,
            'dokter_id'=>1
        ]);
    }
}
