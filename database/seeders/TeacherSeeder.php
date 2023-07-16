<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('teachers')->insert([
            'name' => '-教員を選択-',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
    }
}
