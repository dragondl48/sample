<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class Sinhvien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_sinh_vien')->insert([
            ['name'=>'phuc','email'=>'daohongphuc1999@gmail.com']
        ]);
        
    }
}
