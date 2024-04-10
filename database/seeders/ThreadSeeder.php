<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('threads')->insert([
            'id' => '21',//2がThreadの値、1がこのシート上のもの
            'name' => '第1週目まとめ',
            ]);
    
        DB::table('threads')->insert([
            'id' => '22',//2がThreadの値、1がこのシート上のもの
            'name' => '第2週目まとめ',
            ]);
        
        DB::table('threads')->insert([
            'id' => '23',//2がThreadの値、1がこのシート上のもの
            'name' => '第3週目まとめ',
            ]);
            
        DB::table('threads')->insert([
            'id' => '24',//2がThreadの値、1がこのシート上のもの
            'name' => '第4週目まとめ',
            ]);
            
        DB::table('threads')->insert([
            'id' => '25',//2がThreadの値、1がこのシート上のもの
            'name' => '第5週目まとめ',
            ]);
            
        DB::table('threads')->insert([
            'id' => '26',//2がThreadの値、1がこのシート上のもの
            'name' => '第6週目まとめ',
            ]);
        
        DB::table('threads')->insert([
            'id' => '27',//2がThreadの値、1がこのシート上のもの
            'name' => '第7週目まとめ',
            ]);
            
        DB::table('threads')->insert([
            'id' => '28',//2がThreadの値、1がこのシート上のもの
            'name' => '第8週目まとめ',
            ]);
            
        DB::table('threads')->insert([
            'id' => '29',//2がThreadの値、1がこのシート上のもの
            'name' => '第9週目まとめ',
            ]);
            
        DB::table('threads')->insert([
            'id' => '210',//2がThreadの値、1がこのシート上のもの
            'name' => '第10週目まとめ',
            ]);
            
        DB::table('threads')->insert([
            'id' => '211',//2がThreadの値、1がこのシート上のもの
            'name' => '第11週目まとめ',
            ]);
            
        DB::table('threads')->insert([
            'id' => '212',//2がThreadの値、1がこのシート上のもの
            'name' => '第12週目まとめ',
            ]);
            
        DB::table('threads')->insert([
            'id' => '220',//2がThreadの値、1がこのシート上のもの
            'name' => '中間対策まとめ',
            ]);
            
        DB::table('threads')->insert([
            'id' => '230',//2がThreadの値、1がこのシート上のもの
            'name' => '期末まとめ',
            ]);
        //
    }
   
    
    
}