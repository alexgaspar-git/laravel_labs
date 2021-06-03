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
                "img"=>"avatar/anonymous.png",
                "email"=>"admin@adminou.it",
                "password"=>Hash::make('testtest'),
            ],
        ]);
    }
}
