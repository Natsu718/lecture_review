<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
        'name' => 'テスト',
        ]);
        
        DB::table('grades')->insert([
        'name' => '期末レポート',
        ]);
        
        DB::table('grades')->insert([
        'name' => '授業課題',
        ]);
        
        DB::table('grades')->insert([
        'name' => '出席',
        ]);
        
        DB::table('grades')->insert([
        'name' => 'その他',
        ]);
    }
}
