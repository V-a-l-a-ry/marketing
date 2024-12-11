<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galleries')->insert([
            [
                'name' => 'Nature Collection',
                'gallery_description' => 'A collection of beautiful nature photos.',
                'thumbnail' => 'uploads/thumbnails/nature.jpg',
                'gallery_comments' => 'Nature at its best.',
                'user_id' => 1, // Ensure this user exists in your users table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'City Life',
                'gallery_description' => 'Capturing the hustle and bustle of city life.',
                'thumbnail' => 'uploads/thumbnails/city.jpg',
                'gallery_comments' => 'The city never sleeps.',
                'user_id' => 2, // Ensure this user exists in your users table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wildlife Adventures',
                'gallery_description' => 'Exploring the wild and its inhabitants.',
                'thumbnail' => 'uploads/thumbnails/wildlife.jpg',
                'gallery_comments' => 'Adventures in the wild.',
                'user_id' => 1, // Ensure this user exists in your users table
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
