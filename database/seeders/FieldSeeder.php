<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fields')->insert([
            'name' => 'INF：情報学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'LIB：図書館学／司書課程',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'CTP：学芸員共通科目',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('fields')->insert([
            'name' => 'MUS：文化財科学／博物館学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'MDA：メディア研究',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'JOU：ジャーナリズム',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'PHL：哲学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'PSY：心理学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'ARC：考古学目',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('fields')->insert([
            'name' => 'HIS：歴史学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'ARS：地域研究',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'GEO：地理学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'POL：政治学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'INT：国際関係論程',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'LAW：法学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('fields')->insert([
            'name' => 'ECN：経済学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'CMM：商学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'MAN：経営学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'ACC：会計学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'STA：統計学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'SOC：社会学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('fields')->insert([
            'name' => 'SSS：社会・安全システム科学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'GDR：ジェンダー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'EDU：教育学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'CLD：子ども学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'ANT：人類学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'MAT：数学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('fields')->insert([
            'name' => 'COM：計算科学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'PHY：物理学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'CHM：化学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'ASR：天文学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'PLN：地球惑星科学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'BIO：生物学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('fields')->insert([
            'name' => 'GNM：ゲノム科学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'MED：医学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'BRN：脳科学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'NRS：看護学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'PHA：薬学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'NAN：ナノ・マイクロ科学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('fields')->insert([
            'name' => 'CST：土木工学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'ENV：環境学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'DE：建築学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'STS：科学技術論',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'MEC：機械工学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'ELC：電気電子工学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('fields')->insert([
            'name' => 'SYS：制御・システム工学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'MTL：材料工学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'PCS：プロセス・化学工学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'MGT：経営工学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'IEN：総合工学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'HUM：人間科学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'LIF：家政学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'AGC：農学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'TRS：観光学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('fields')->insert([
            'name' => 'ART：芸術／美術',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'DES：デザイン学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'HSS：健康／スポーツ科学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'LNG：言語学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'LAN：語学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'LIT：文学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'GSS：総合社会科学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('fields')->insert([
            'name' => 'CMF：複合領域',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'BSP：基礎演習',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'HPE：保健体育',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'TCP：教職科目',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('fields')->insert([
            'name' => 'GSP：留学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
        DB::table('fields')->insert([
            'name' => 'GEN：総合／学際',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('fields')->insert([
            'name' => 'ZZZ：指定なし',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}

