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
    public function run(){
    
         
         DB::table('teachers')->insert([
            'name' => '井上淳',
         ]);
         
         DB::table('teachers')->insert([
            'name' => '村井翔',
         ]);
         
         DB::table('teachers')->insert([
            'name' => '福川康之',
         ]);
         
         DB::table('teachers')->insert([
            'name' => '梁松',
         ]);
         
         DB::table('teachers')->insert([
            'name' => '駒野雄一',
         ]);
    }
}
