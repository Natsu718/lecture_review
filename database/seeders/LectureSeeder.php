<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lectures')->insert([
            'name' => '数理統計学 01',
            'field_id' => 20,
            'teacher_id' => 1,
            'department_id' => 1,
        ]);
         
        DB::table('lectures')->insert([
            'name' => '精神分析入門2-1_【文構・文学_合併】',
            'field_id' =>8,
            'teacher_id' =>2,
            'department_id' =>10,
        ]);
         
        DB::table('lectures')->insert([
            'name' => '人間の発達と進化2-1_【文構・文学_合併】',
            'field_id' => 8,
            'teacher_id' =>3,
            'department_id' =>10,
        ]);
        DB::table('lectures')->insert([
            'name' => '統計入門',
            'field_id' => 27,
            'teacher_id' =>4,
            'department_id' =>3,
        ]);
         
        DB::table('lectures')->insert([
            'name' => '数学特論5',
            'field_id' => 27,
            'teacher_id' =>5,
            'department_id' =>3,
        ]);
         
    }
}

