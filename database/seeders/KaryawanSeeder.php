<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'npk' => '10001',
                'nama' => 'Agus',
                'alamat' => 'Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'npk' => '10002',
                'nama' => 'Asep',
                'alamat' => 'Purbalingga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'npk' => '10003',
                'nama' => 'Jajang',
                'alamat' => 'Subang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'npk' => '10004',
                'nama' => 'Imam',
                'alamat' => 'Yogyakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('karyawan')->insert($data);
    }
}
