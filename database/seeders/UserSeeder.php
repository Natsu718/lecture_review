<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '小幡菜摘',
            'department_id' => '3',
            'email' => 'natsumiob1216@gmail.com',
            'password' => '12345678',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
