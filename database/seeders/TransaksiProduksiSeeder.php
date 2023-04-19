<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiProduksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['npk' => '10001', 'tanggal_transaksi' => '2021-01-05 09:31:01', 'kode_lokasi' => 'L001', 'kode_item' => 'M001', 'qty_actual' => 10],
            ['npk' => '10002', 'tanggal_transaksi' => '2021-01-12 09:32:01', 'kode_lokasi' => 'L002', 'kode_item' => 'M002', 'qty_actual' => 20],
            ['npk' => '10003', 'tanggal_transaksi' => '2021-01-12 09:33:01', 'kode_lokasi' => 'L001', 'kode_item' => 'M001', 'qty_actual' => 25],
            ['npk' => '10001', 'tanggal_transaksi' => '2021-01-13 09:34:01', 'kode_lokasi' => 'L003', 'kode_item' => 'M003', 'qty_actual' => 14],
            ['npk' => '10004', 'tanggal_transaksi' => '2021-01-13 09:35:01', 'kode_lokasi' => 'L004', 'kode_item' => 'M004', 'qty_actual' => 26],
            ['npk' => '10003', 'tanggal_transaksi' => '2021-01-13 09:36:01', 'kode_lokasi' => 'L002', 'kode_item' => 'M002', 'qty_actual' => 20],
        ];

        DB::table('transaksi_produksi')->insert($data);
    }
}
