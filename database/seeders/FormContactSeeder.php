<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('form_contacts')->insert([
            [
                "subject"=>"A l'aide"
            ],
            [
                "subject"=>"A propos de"
            ],
            [
                "subject"=>"Engagez moi"
            ],
        ]);
    }
}
