<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "title"=>"Get in the lab",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-023-flask",
                "created_at"=>now(),
            ],
            [
                "title"=>"Projects online",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-011-compass",
                "created_at"=>now(),
            ],
            [
                "title"=>"SMART MARKETING",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-037-idea",
                "created_at"=>now(),
            ],
            [
                "title"=>"Social Media",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-039-vector",
                "created_at"=>now(),
            ],
            [
                "title"=>"Brainstorming",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-036-brainstorming",
                "created_at"=>now(),
            ],
            [
                "title"=>"Documented",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-026-search",
                "created_at"=>now(),
            ],
            [
                "title"=>"Responsive",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-018-laptop-1",
                "created_at"=>now(),
            ],
            [
                "title"=>"Retina",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-043-sketch",
                "created_at"=>now(),
            ],
            [
                "title"=>"Ultra modern",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-012-cube",
                "created_at"=>now(),
            ],
            [
                "title"=>"Ultra modern",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-012-cube",
                "created_at"=>now(),
            ],
            [
                "title"=>"Ultra modern",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-012-cube",
                "created_at"=>now(),
            ],
            [
                "title"=>"Ultra modern",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-012-cube",
                "created_at"=>now(),
            ],
            [
                "title"=>"Ultra modern",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-012-cube",
                "created_at"=>now(),
            ],
            [
                "title"=>"Ultra modern",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-012-cube",
                "created_at"=>now(),
            ],
            [
                "title"=>"Ultra modern",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-012-cube",
                "created_at"=>now(),
            ],
            [
                "title"=>"Ultra modern",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-012-cube",
                "created_at"=>now(),
            ],
            [
                "title"=>"Ultra modern",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-012-cube",
                "created_at"=>now(),
            ],
            [
                "title"=>"Ultra modern",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon"=>"flaticon-012-cube",
                "created_at"=>now(),
            ],
        ]);
    }
}
