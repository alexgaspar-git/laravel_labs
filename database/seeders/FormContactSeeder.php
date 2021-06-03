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
        DB::table('formcontacts')->insert([
            [
                "subject"=>"Aled"
            ],
            [
                "subject"=>"Aled2"
            ],
            [
                "subject"=>"Aled3"
            ],
        ]);
    }
}
