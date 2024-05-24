<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dokter;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokter::insert([
            [
                'nama' => 'Dr. John',
                'gender' => 'Laki-laki',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1990-01-01',
                'kategori' => 'Bidan',
                'telpon' => '02179180677',
                'alamat' => 'Jl. Merdeka No.1',
            ],
        ]);
    }
}
