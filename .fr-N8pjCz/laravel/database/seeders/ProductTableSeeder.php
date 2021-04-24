<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title' => 'Молоко',
                'description' => 'Деревенское',
                'price' => '80',
                'quantity' => 20,
                'status' => 1,
                'category_id' => 1,
                'thumbnail' => 'images/2021-04-11/69zhQJbpYArPshpKPjegB96komAzKMJfX4EqNP3d.jpg',
            ],
            [
                'title' => 'Творог',
                'description' => 'Описание творога',
                'price' => '75',
                'quantity' => 10,
                'status' => 1,
                'category_id' => 1,
                'thumbnail' => 'images/2021-04-11/fB7e5ukxl5k1VgIldqqrvK8NADh6RULryC88vlxN.jpg',
            ],
            [
                'title' => 'Мясо',
                'description' => 'телятина',
                'price' => '350',
                'quantity' => 30,
                'status' => 1,
                'category_id' => 2,
                'thumbnail' => 'images/2021-04-11/apZDkfMK8YYfAo0lSxKLWobXjIMLjCe6RQ0n04KR.jpg',
            ],
        ]);
    }
}
