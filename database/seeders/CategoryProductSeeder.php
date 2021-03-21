<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_products')->insert([
            'name' => 'Кошки',
        ]);
        DB::table('category_products')->insert([
            'name' => 'Собаки',
        ]);
        DB::table('category_products')->insert([
            'name' => 'Попугаи',
        ]);
    }
}
