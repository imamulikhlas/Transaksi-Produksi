<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ItemSeeder;
use Database\Seeders\KaryawanSeeder;
use Database\Seeders\LokasiSeeder;
use Database\Seeders\AchivementSeeder;
use Database\Seeders\PlanningSeeder;
use Database\Seeders\TransaksiProduksiSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(KaryawanSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(LokasiSeeder::class);
        $this->call(AchivementSeeder::class);
        $this->call(PlanningSeeder::class);
        $this->call(TransaksiProduksiSeeder::class);
        $this->call(UserSeeder::class);
    }
}
