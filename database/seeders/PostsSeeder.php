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
            'nickname' => 'mannzyuu'
            
            ]);
    
    
    
    
        DB::table('posts')->insert([
            'title' => 'test2',//一桁目がSemの4,二桁めがこのシート上の1
            'body' => 'test用のデータをPostsSeederで入れてます2',
            'category_id' => 31,
            'thread_id' => 230,
            'user_id' => 1,
            'nickname' => 'mannzyuu'
            
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
           
           
    }
}