<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Faker\Factory as Faker;

class NewsletterSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $categories = ['Luminaries', 'Mentorships', 'Events', 'News'];
        $sampleFilesDir = database_path('faker_files');
        $sampleFiles = collect(scandir($sampleFilesDir))->filter(function ($file) use ($sampleFilesDir) {
            return is_file($sampleFilesDir . '/' . $file);
        });

        foreach (range(1, 25) as $index) {
            $contentFile = null;
            if ($sampleFiles->isNotEmpty()) {
                $randomFile = $sampleFiles->random();
                $filePath = $sampleFilesDir . '/' . $randomFile;
                $contentFile = Storage::disk('public')->putFile('uploads', new \Illuminate\Http\File($filePath));
            }

            DB::table('newsletters')->insert([
                'title' => $faker->sentence(6, true),
                'category_id' => $faker->randomElement($categories),
                'content_file' => $contentFile,
                'send_date' => $faker->dateTimeBetween('now', '+30 days'),
                'opens' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
