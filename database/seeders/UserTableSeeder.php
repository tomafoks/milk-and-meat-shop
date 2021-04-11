<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Администратор',
            'email' => 'admin@mail.ru',
            'password' => bcrypt('123'),
            'is_admin' => 1,
        ],
        [
            'name' => 'User',
            'email' => 'user@mail.ru',
            'password' => bcrypt('321'),
        ]);
    }
}
