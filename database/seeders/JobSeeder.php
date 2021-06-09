<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            [
                "job"=>"CEO"
            ],
            [
                "job"=>"CTO"
            ],
            [
                "job"=>"CFO"
            ],
            [
                "job"=>"Executive Director"
            ],
            [
                "job"=>"Web Developer"
            ],
            [
                "job"=>"Project Manager"
            ],
            [
                "job"=>"Web Designer"
            ],
            [
                "job"=>"Basic ass mf"
            ]
        ]);
    }
}
