<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade

class NewsletterSeeder extends Seeder
{
    public function run()
    {
        DB::table('newsletters')->insert([
            'title' => 'Tech Innovations - December Edition',
            'category_id' => 1, // Ensure this ID exists in the 'categories' table
           
            'send_date' => now()->addDays(7),
            'opens' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('newsletters')->insert([
            'title' => 'Tech Innovations - December Edition',
            'category_id' => 1, // Ensure this ID exists in the 'categories' table
          
            'send_date' => now()->addDays(7),
            'opens' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);




        DB::table('newsletters')->insert([
            'title' => 'Tech Innovations - December Edition',
            'category_id' => 4, // Ensure this ID exists in the 'categories' table
            
            'send_date' => now()->addDays(7),
            'opens' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('newsletters')->insert([
            'title' => 'Tech Innovations - December Edition',
            'category_id' => 2, // Ensure this ID exists in the 'categories' table
          
            'send_date' => now()->addDays(7),
            'opens' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('newsletters')->insert([
            'title' => 'Tech Innovations - December Edition',
            'category_id' => 3, // Ensure this ID exists in the 'categories' table
           
            'send_date' => now()->addDays(7),
            'opens' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
