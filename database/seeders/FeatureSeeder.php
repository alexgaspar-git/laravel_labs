<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            [
                "icon"=>"flaticon-002-caliper",
                "title"=>"Get in the lab",
                "description"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon"=>"flaticon-019-coffee-cup",
                "title"=>"Projects online",
                "description"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon"=>"flaticon-020-creativity",
                "title"=>"SMART MARKETING",
                "description"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon"=>"flaticon-037-idea",
                "title"=>"Get in the lab",
                "description"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon"=>"flaticon-025-imagination",
                "title"=>"Projects online",
                "description"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon"=>"flaticon-008-team",
                "title"=>"SMART MARKETING",
                "description"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
        ]);
    }
}
