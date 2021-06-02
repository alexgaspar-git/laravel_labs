<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                "text"=>"blibloubloubloubloubloubloub",
                "title"=>"mmmmmmmhm",
                "img"=>"blog/blog-1.jpg",
                "category_id"=>"1",
                "comment_id"=>null,
                "created_at"=>now(),
            ],
        ]);
    }
}
