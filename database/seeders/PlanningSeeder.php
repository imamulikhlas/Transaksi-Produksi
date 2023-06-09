<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kode_planning' => 'M001', 'qty_target' => 10, 'waktu_target' => 20],
            ['kode_planning' => 'M002', 'qty_target' => 15, 'waktu_target' => 30],
            ['kode_planning' => 'M003', 'qty_target' => 12, 'waktu_target' => 24],
            ['kode_planning' => 'M004', 'qty_target' => 14, 'waktu_target' => 28],
        ];

        DB::table('planning')->insert($data);
    }
}
