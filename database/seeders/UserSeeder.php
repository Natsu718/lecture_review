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
            'name' => 'あ',
            'department_id' => '2',
            'email' => 'a@a',
            'password' => 'aaaaaaaa',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
