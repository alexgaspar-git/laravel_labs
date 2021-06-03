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
                "dateYear"=>date("Y"),
                "dateMonth"=>date("M"),
                "dateDay"=>date("d"),
                "img"=>"blog-1.jpg",
                "category_id"=>1,
                "user_id"=>1,
                "comment_id"=>1,
                "created_at"=>now(),
            ],
        ]);
    }
}
