<?php
// database/seeders/GallerySeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    public function run()
    {
        Gallery::create([
            'title' => 'Nature Photos',
            'type' => 'image',
            'media_url' => 'path/to/nature_image.jpg',
         
            'send_date' => now()->addDays(2),
            'opens' => 0
        ]);

        Gallery::create([
            'title' => 'Tech Videos',
            'type' => 'video',
            'media_url' => 'path/to/tech_video.mp4',
          
            'send_date' => now()->addDays(5),
            'opens' => 0
        ]);

        Gallery::create([
            'title' => 'Document Collection',
            'type' => 'document',
            'media_url' => 'path/to/document.pdf',
          
            'send_date' => now()->addDays(1),
            'opens' => 120
        ]);
    }
}

