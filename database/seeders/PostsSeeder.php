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
            'title' => 'test2',//一桁目がSemの4,二桁めがこのシート上の1
            'body' => 'test用のデータをPostsSeederで入れてます2',
            'category_id' => 31,
            'thread_id' => 230,
            'user_id' => 1,
            'nickname' => 'mannzyuu'
            
           ]);
           
           
    }
}