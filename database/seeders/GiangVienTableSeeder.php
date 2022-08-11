<?php

namespace Database\Seeders;

use Database\Factories\GiangVienFactory;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiangVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,10) as $value){
            DB::table('teacher')->insert([
                'name'=>$faker->name(),
                'email'=>$faker->email(),
            ]);
        }
    }
}
