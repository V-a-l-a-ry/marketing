<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('photos')->insert([
            [
                'path' => 'uploads/photos/photo1.jpg',
                'gallery_id' => 1,
                'photo_description' => 'A beautiful landscape photo.',
                'photo_comment' => 'Captured during the summer trip.',
                'upload_time' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'path' => 'uploads/photos/photo2.jpg',
                'gallery_id' => 2,
                'photo_description' => 'An amazing sunset by the beach.',
                'photo_comment' => 'The colors were truly mesmerizing.',
                'upload_time' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'path' => 'uploads/photos/photo3.jpg',
                'gallery_id' => 1,
                'photo_description' => 'City skyline at night.',
                'photo_comment' => 'The lights were dazzling.',
                'upload_time' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
