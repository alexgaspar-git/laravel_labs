<?php

namespace Database\Seeders;

use App\Models\FormContact;
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
            ContactSeeder::class,
            CommentSeeder::class,
            FormContact::class,
            TitleSeeder::class,
            TagSeeder::class,
            CategorySeeder::class,
            RoleSeeder::class,
            JobSeeder::class,
            UserSeeder::class,
            PostSeeder::class,
            TagPostSeeder::class,
        ]);
    }
}
