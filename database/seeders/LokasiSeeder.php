<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_lokasi' => 'L001',
                'nama_lokasi' => 'Lokasi 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_lokasi' => 'L002',
                'nama_lokasi' => 'Lokasi 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_lokasi' => 'L003',
                'nama_lokasi' => 'Lokasi 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_lokasi' => 'L004',
                'nama_lokasi' => 'Lokasi 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('lokasi')->insert($data);
    }
}
