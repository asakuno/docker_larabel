<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BunbougusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('bunbougus')->insert([
            [
                'created_at' => now(),
                'updated_at' => null,
                'name' => '3B鉛筆',
                'price' => '100',
                'class' => '1',
                'description' => '普通の3B鉛筆'
            ],
            [
                'created_at' => now(),
                'updated_at' => null,
                'name' => '2B鉛筆',
                'price' => '101',
                'class' => '1',
                'description' => '普通の2B鉛筆'
            ],
            [
                'created_at' => now(),
                'updated_at' => null,
                'name' => 'B鉛筆',
                'price' => '102',
                'class' => '1',
                'description' => '普通のB鉛筆'
            ],
        ]);
    }
}
