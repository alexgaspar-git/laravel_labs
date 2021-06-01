<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            VideoSeeder::class,
            ServiceSeeder::class,
            TestimonialSeeder::class,
            DiscoverSeeder::class,
            FeatureSeeder::class,
            MapSeeder::class,
            ImageSeeder::class,
            LogoSeeder::class,
        ]);
    }
}
