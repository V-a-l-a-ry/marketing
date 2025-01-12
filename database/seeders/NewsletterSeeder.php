<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NewsletterSeeder extends Seeder
{
    public function run()
    {
        // Instantiate Faker
        $faker = Faker::create();

        // Define the available categories
        $categories = ['Luminaries', 'Mentorships', 'Events', 'News'];

        // Insert newsletters with Faker-generated data
        foreach (range(1, 25) as $index) {
            DB::table('newsletters')->insert([
                'title' => $faker->sentence(6, true), // Generate a random title
                'category_id' => $faker->randomElement($categories), // Random category
                'content_path' => $faker->optional()->url, // Optional random URL
                'send_date' => $faker->dateTimeBetween('now', '+30 days'), // Random date within 30 days
                'opens' => 0, // Always set opens to 0
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
