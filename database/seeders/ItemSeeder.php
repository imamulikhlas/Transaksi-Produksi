<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_item' => 'M001',
                'nama_item' => 'Bolpen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_item' => 'M002',
                'nama_item' => 'Pensil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_item' => 'M003',
                'nama_item' => 'Penghapus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_item' => 'M004',
                'nama_item' => 'Spidol',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('item')->insert($data);
    }
}
