<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => '授乳',
            ],
            [
                'id' => 2,
                'name' => 'ミルク',
            ],
            [
                'id' => 3,
                'name' => 'うんち',
            ],
            [
                'id' => 4,
                'name' => 'おしっこ',
            ],
            [
                'id' => 5,
                'name' => '寝る',
            ],
            [
                'id' => 6,
                'name' => '起きる',
            ],
        ]);
    }
}
