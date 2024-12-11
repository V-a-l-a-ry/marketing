<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('newsletters')->insert([
            [
                'title' => 'Tech Innovations in 2024',
                'category' => 'Technology',
                'content' => 'A deep dive into the most innovative tech trends of 2024.',
                'image_path' => 'uploads/newsletters/tech2024.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Health and Wellness Tips',
                'category' => 'Health',
                'content' => 'Simple tips to improve your health and wellness this year.',
                'image_path' => 'uploads/newsletters/health_tips.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Top Travel Destinations',
                'category' => 'Travel',
                'content' => 'Explore the top travel destinations to visit in 2024.',
                'image_path' => 'uploads/newsletters/travel2024.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
