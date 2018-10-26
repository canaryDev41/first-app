<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            0 => [
                'name' => 'hair'
            ],
            1 => [
                'name' => 'skin'
            ],
            2 => [
                'name' => 'makeup'
            ]
        ]);
    }
}
