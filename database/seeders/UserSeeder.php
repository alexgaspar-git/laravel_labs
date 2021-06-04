<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "firstname"=>"Mr.",
                "name"=>"Adminson",
                "age"=>12,
                "role_id"=>1,
                "job_id"=>1,
                "testimonial_id"=>null,
                "img"=>"1.jpg",
                "email"=>"admin@adminou.it",
                "password"=>Hash::make('testtest'),
            ],
            [
                "firstname"=>"Mr.",
                "name"=>"Adminson",
                "age"=>12,
                "role_id"=>1,
                "job_id"=>3,
                "testimonial_id"=>null,
                "img"=>"2.jpg",
                "email"=>"admin@adminouxe.it",
                "password"=>Hash::make('testtest'),
            ],
            [
                "firstname"=>"Mr.",
                "name"=>"Adminson",
                "age"=>12,
                "role_id"=>1,
                "job_id"=>4,
                "testimonial_id"=>null,
                "img"=>"3.jpg",
                "email"=>"admin@adminoux.it",
                "password"=>Hash::make('testtest'),
            ],
        ]);
    }
}
