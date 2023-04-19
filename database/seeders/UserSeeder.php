<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'username' => '10001',
                'password' => bcrypt('password')
            ],
            [
                'username' => '10002',
                'password' => bcrypt('password')
            ],
            [
                'username' => '10003',
                'password' => bcrypt('password')
            ],
        ];

        DB::table('users')->insert($data);

    }
}
