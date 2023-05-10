<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KindsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('kinds')->insert([
            [
                'created_at' => now(),
                'updated_at' => null,
                'name' => '鉛筆',
            ],
            [
                'created_at' => now(),
                'updated_at' => null,
                'name' => '消しゴム',
            ],
            [
                'created_at' => now(),
                'updated_at' => null,
                'name' => 'ボールペン',
            ],
        ]);
    }
}
