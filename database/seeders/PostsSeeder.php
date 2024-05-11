<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'test1',//一桁目がSemの4,二桁めがこのシート上の1
            'body' => 'test用のデータをPostsSeederで入れてます',
            'category_id' => 31,
            'thread_id' => 230,
            'user_id' => 1,
            'nickname' => 'mannzyuu',
            'image_url' => "",
            ]);
    
    
    
    
        DB::table('posts')->insert([
            'title' => '第四週目演習問題',//一桁目がSemの4,二桁めがこのシート上の1
            'body' => '線形代数の行列式の解き方を復習しよう',
            'category_id' => 310,
            'thread_id' => 24,
            'user_id' => 1,
            'nickname' => 'mannzyuu',
            'image_url' => "https://res.cloudinary.com/dehdvzqfw/image/upload/v1715442702/qopux7talnoz5z0vuh8z.jpg",
            
           ]);
         
         DB::table('posts')->insert([
            'title' => '第四週目演習問題',//一桁目がSemの4,二桁めがこのシート上の1
            'body' => '交流LC回路の状態方程式と特解を求めた',
            'category_id' => 39,
            'thread_id' => 24,
            'user_id' => 1,
            'nickname' => 'mannzyuu',
            'image_url' => "https://res.cloudinary.com/dehdvzqfw/image/upload/v1715328077/IMG_4825_wuznsf.jpg",
            
           ]);
           
        DB::table('posts')->insert([
            'title' => '第三週目演習問題',//一桁目がSemの4,二桁めがこのシート上の1
            'body' => 'ExcelはPCで操作したほうがいいのでPCを持ってこよう',
            'category_id' => 310,
            'thread_id' => 23,
            'user_id' => 1,
            'nickname' => 'mannzyuu',
            'image_url' => "https://res.cloudinary.com/dehdvzqfw/image/upload/v1715442702/xiim1gqkxmllm678dyxz.jpg",
            ]);
        
        DB::table('posts')->insert([
            'title' => '第四週目演習問題',//一桁目がSemの4,二桁めがこのシート上の1
            'body' => '先週の問題の応用なので先週を解けるようにしよう',
            'category_id' => 36,
            'thread_id' => 24,
            'user_id' => 1,
            'nickname' => 'mannzyuu',
            'image_url' => "https://res.cloudinary.com/dehdvzqfw/image/upload/v1715442700/zpobvpjwutess7keurpc.jpg",
            ]);    
        
        DB::table('posts')->insert([
            'title' => '第三週目演習問題',//一桁目がSemの4,二桁めがこのシート上の1
            'body' => '交流RL回路の状態方程式と特解を求めた',
            'category_id' => 39,
            'thread_id' => 24,
            'user_id' => 1,
            'nickname' => 'mannzyuu',
            'image_url' => "https://res.cloudinary.com/dehdvzqfw/image/upload/v1715442702/wxnmxvhjzho54khxrogj.jpg",    
            ]); 
           
        DB::table('posts')->insert([
            'title' => '第三週目演習問題part1',//一桁目がSemの4,二桁めがこのシート上の1
            'body' => 'コイルの抵抗の公式をちゃんと覚えよう、消費電力はV*Aで求まる',
            'category_id' => 36,
            'thread_id' => 23,
            'user_id' => 1,
            'nickname' => 'mannzyuu',
            'image_url' => "https://res.cloudinary.com/dehdvzqfw/image/upload/v1715442701/bsexzbxjsfgn8aelzofq.jpg",    
            ]);    
        
        DB::table('posts')->insert([
            'title' => '第三週目演習問題part2',//一桁目がSemの4,二桁めがこのシート上の1
            'body' => '消費電力はV*Aで求まる、単位は[W]',
            'category_id' => 36,
            'thread_id' => 23,
            'user_id' => 1,
            'nickname' => 'mannzyuu',
            'image_url' => "https://res.cloudinary.com/dehdvzqfw/image/upload/v1715442702/h3cxrf58yhkh5lfsq1ci.jpg",    
            ]);   
        
        DB::table('posts')->insert([
            'title' => '第四週目の板書',//一桁目がSemの4,二桁めがこのシート上の1
            'body' => '原子の構造や表記方法',
            'category_id' => 37,
            'thread_id' => 24,
            'user_id' => 1,
            'nickname' => 'mannzyuu',
            'image_url' => "https://res.cloudinary.com/dehdvzqfw/image/upload/v1715442702/kf7e1w2t6uiukqkltiap.jpg",    
            ]);  
    }
}