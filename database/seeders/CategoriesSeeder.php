<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categories')->insert([
            'id' => '31',//3がclassのid,1がこの授業の個数目
            'name' => '無線通信工学',
            'semester_id' => '15',
            ]);
            
         DB::table('categories')->insert([
            'id' => '32',
            'name' => 'コンピュータ工学',
            'semester_id' => '15',
            ]);
        
        DB::table('categories')->insert([
            'id' => '33',
            'name' => '情報通信工学実験1',
            'semester_id' => '15',
            ]);
            
        DB::table('categories')->insert([
            'id' => '34',
            'name' => 'ソフトウェア工学',
            'semester_id' => '15',
            ]);
            
        DB::table('categories')->insert([
            'id' => '35',
            'name' => '通信理論',
            'semester_id' => '15',
            ]);
            
        DB::table('categories')->insert([
            'id' => '36',
            'name' => '電子回路及び演習2',
            'semester_id' => '15',
            ]);
        
        DB::table('categories')->insert([
            'id' => '37',
            'name' => '物質科学',
            'semester_id' => '15',
            ]);
        
        DB::table('categories')->insert([
            'id' => '38',
            'name' => '国際社会論',
            'semester_id' => '15',
            ]);
            
        DB::table('categories')->insert([
            'id' => '39',
            'name' => '電気回路解析学',
            'semester_id' => '15',
            ]);
            
        DB::table('categories')->insert([
            'id' => '310',
            'name' => '数値計算工学',
            'semester_id' => '15',
            ]);
            
        DB::table('categories')->insert([
            'id' => '311',
            'name' => 'キャリアデザイン3',
            'semester_id' => '15',
            ]);
    }
}