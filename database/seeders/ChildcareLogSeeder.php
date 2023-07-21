<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChildcareLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('childcare_logs')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'category_id' => 1,
                'datetime' => now(),
                'memo' => '下痢だった',
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'category_id' => 1,
                'datetime' => now(),
                'memo' => '快便',
            ],

        ]);
    }
}
