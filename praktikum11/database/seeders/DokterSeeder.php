<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('dokters')->insert([
            [
                'nama' => 'Otto Octavius',
                'gender' => 'L',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1990-04-21',
                'kategori' => 'Umum',
                'telpon' => '085578765436',
                'alamat' => 'Jl. Merdeka No.1',
                'unit_kerja_id' => '1',
            ],
            [
                'nama' => 'Yoshi Indra Kasumi',
                'gender' => 'P',
                'tmp_lahir' => 'Bogor',
                'tgl_lahir' => '1995-07-18',
                'kategori' => 'Bedah',
                'telpon' => '085578765436',
                'alamat' => 'Jl. Catur No.21',
                'unit_kerja_id' => '3',
            ],
            [
                'nama' => 'Fajar Muhammad bin Laden',
                'gender' => 'L',
                'tmp_lahir' => 'Suria',
                'tgl_lahir' => '2001-09-11',
                'kategori' => 'Spesialis',
                'telpon' => '0891171717089',
                'alamat' => 'Jl. Meledak No.1',
                'unit_kerja_id' => '2',
            ],
            [
                'nama' => 'Sayid Lmao',
                'gender' => 'L',
                'tmp_lahir' => 'Inkopad',
                'tgl_lahir' => '1945-08-17',
                'kategori' => 'Spesialis',
                'telpon' => '086754336727',
                'alamat' => 'Jl. lmao pisan kang NO.2',
                'unit_kerja_id' => '3',
            ],
            [
                'nama' => 'Louise',
                'gender' => 'P',
                'tmp_lahir' => 'Depok',
                'tgl_lahir' => '1967-06-21',
                'kategori' => 'Bidan',
                'telpon' => '085567652345',
                'alamat' => 'Jl. Merdeka No.1',
                'unit_kerja_id' => '1',
            ],
        ]);
    }
}

    

