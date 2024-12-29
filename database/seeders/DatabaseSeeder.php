<?php
// database/seeders/DatabaseSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Calling the NewsletterSeeder
        $this->call([
            NewsletterSeeder::class,
            EventSeeder::class,
           // SubscriberSeeder::class,
            GallerySeeder::class,
            NewsSeeder::class,
            NoticeSeeder::class,
        ]);
    }
}
