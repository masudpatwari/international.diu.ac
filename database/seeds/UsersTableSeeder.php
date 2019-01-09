<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Mesbaul',
            'last_name' => 'Islam',
            'email' => 'mesbaul.it@diu-bd.net',
            'password' => bcrypt('123456'),
            'role' => 'administrator',
        ]);
    }
}
