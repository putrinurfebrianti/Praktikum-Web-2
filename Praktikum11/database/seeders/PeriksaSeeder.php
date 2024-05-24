<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Periksa;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Periksa::insert([
            [
                'tanggal' => '2024-01-01',
                'berat' => '47.2',
                'tinggi' => '166',
                'tensi' => '90/100',
                'keterangan' => 'Baik',
            ],
    
        ]);
    }
}
