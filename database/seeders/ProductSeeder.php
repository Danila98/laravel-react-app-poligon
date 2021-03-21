<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Лабрадор',
            'decsription' => '',
            'price' => 89.2,
            'category_id' => 2,
        ]);
        DB::table('products')->insert([
            'name' => 'Немецкая овчарка',
            'decsription' => '',
            'price' => 100,
            'category_id' => 2,
        ]);
        DB::table('products')->insert([
            'name' => 'Чихуахуа',
            'decsription' => '',
            'price' => 124.423,
            'category_id' => 2,
        ]);



        DB::table('products')->insert([
            'name' => 'Мей-кун',
            'decsription' => '',
            'price' => 89.2,
            'category_id' => 1,
        ]);
        DB::table('products')->insert([
            'name' => 'Сиамская кошка',
            'decsription' => '',
            'price' => 100,
            'category_id' => 1,
        ]);
        DB::table('products')->insert([
            'name' => 'Сибирская кошка',
            'decsription' => '',
            'price' => 124.423,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Какаду',
            'decsription' => '',
            'price' => 100,
            'category_id' => 3,
        ]);
        DB::table('products')->insert([
            'name' => 'Ара',
            'decsription' => '',
            'price' => 124.423,
            'category_id' => 3,
        ]);
    }
}
