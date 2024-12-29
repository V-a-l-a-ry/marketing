<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title' => 'New Healthcare Initiative Launched',
            'content' => 'A new healthcare initiative has been launched to provide better services to the community.',
            'published_at' => now(),
        ]);

        News::create([
            'title' => 'Health Tips for Pregnant Mothers',
            'content' => 'In this article, we discuss essential health tips for expecting mothers to ensure a safe pregnancy.',
            'published_at' => now(),
        ]);

        // Add more entries as needed
    }
}
