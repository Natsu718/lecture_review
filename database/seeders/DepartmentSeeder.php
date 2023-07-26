<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('departments')->insert([
            'name' => '政経',
         ]);
         
         DB::table('departments')->insert([
            'name' => '法学',
         ]);
         
         DB::table('departments')->insert([
            'name' => '教育',
         ]);
         
         DB::table('departments')->insert([
            'name' => '商学',
         ]);
         
         DB::table('departments')->insert([
            'name' => '社学',
         ]);
         
         DB::table('departments')->insert([
            'name' => '人科',
         ]);
        
        DB::table('departments')->insert([
            'name' => 'スポーツ',
         ]);
         
         DB::table('departments')->insert([
            'name' => '国際教養',
         ]);
         
         DB::table('departments')->insert([
            'name' => '文構',
         ]);
         
         DB::table('departments')->insert([
            'name' => '文',
         ]);
         
         DB::table('departments')->insert([
            'name' => '人通',
         ]);
         
         DB::table('departments')->insert([
            'name' => '基幹',
         ]);
         
         DB::table('departments')->insert([
            'name' => '創造',
         ]);
         
         DB::table('departments')->insert([
            'name' => '先進',
         ]);
         
         DB::table('departments')->insert([
            'name' => 'グローバル',
         ]);
         
         DB::table('departments')->insert([
            'name' => '政研',
         ]);
         
         DB::table('departments')->insert([
            'name' => '経研',
         ]);
         
         DB::table('departments')->insert([
            'name' => '法研',
         ]);
        
        DB::table('departments')->insert([
            'name' => '文研',
         ]);
         
         DB::table('departments')->insert([
            'name' => '商研',
         ]);
         
         DB::table('departments')->insert([
            'name' => '教研',
         ]);
         
         DB::table('departments')->insert([
            'name' => '人研',
         ]);
         
         DB::table('departments')->insert([
            'name' => '社学研',
         ]);
         
         DB::table('departments')->insert([
            'name' => 'アジア研',
         ]);
         DB::table('departments')->insert([
            'name' => '国情研',
         ]);
         
         DB::table('departments')->insert([
            'name' => '日研',
         ]);
         
         DB::table('departments')->insert([
            'name' => '情シス研',
         ]);
         
         DB::table('departments')->insert([
            'name' => '法務研',
         ]);
         
         DB::table('departments')->insert([
            'name' => '会計研',
         ]);
         
         DB::table('departments')->insert([
            'name' => 'スポーツ研',
         ]);
        
        DB::table('departments')->insert([
            'name' => '基幹研',
         ]);
         
         DB::table('departments')->insert([
            'name' => '創造研',
         ]);
         
         DB::table('departments')->insert([
            'name' => '先進研',
         ]);
         
         DB::table('departments')->insert([
            'name' => '環エネ研',
         ]);
         
         DB::table('departments')->insert([
            'name' => '国際コミュ研',
         ]);
         
         DB::table('departments')->insert([
            'name' => '経営研',
         ]);
         
          DB::table('departments')->insert([
            'name' => '芸術',
         ]);
         
         DB::table('departments')->insert([
            'name' => '日本語',
         ]);
         
         DB::table('departments')->insert([
            'name' => '留学',
         ]);
    }
}
