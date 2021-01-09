<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('postals')->delete();
        DB::collection('postals')->insert(['postal' => '0000', 'area' => '0', 'district' => '0', 'isDNR' => false]);
        DB::collection('postals')->insert(['postal' => '0001', 'area' => '1', 'district' => '1', 'isDNR' => true]);
        DB::collection('postals')->insert(['postal' => '0002', 'area' => '2', 'district' => '1', 'isDNR' => true]);

    }
}
