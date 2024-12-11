<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,      // Run UserSeeder first
            GallerySeeder::class,   // Then run GallerySeeder
            PhotoSeeder::class,     // Then run PhotoSeeder
            NewsletterSeeder::class // Run NewsletterSeeder
        ]);
    }
}
