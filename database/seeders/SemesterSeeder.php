<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->insert([
            'id' => '11',//一桁目がSemesterの1,二桁めがこのシート上の1
            'name' => '1年前期']);
            
         DB::table('semesters')->insert([
            'id' => '12',
            'name' => '1年後期']);
            
         DB::table('semesters')->insert([
            'id' => '13',
            'name' => '2年前期']);
            
         DB::table('semesters')->insert([
            'id' => '14',
            'name' => '2年後期']);
         
         DB::table('semesters')->insert([
            'id' => '15',
            'name' => '3年前期']);
            
         DB::table('semesters')->insert([
            'id' => '16',
            'name' => '3年後期']);
            
         DB::table('semesters')->insert([
            'id' => '17',
            'name' => '4年前期']);
            
         DB::table('semesters')->insert([
            'id' => '18',
            'name' => '4年後期']);
    }
}