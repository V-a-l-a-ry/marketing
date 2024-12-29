<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notice;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notice::create([
            'title' => 'Office Closed for the Holidays',
            'content' => 'Please note that the office will be closed from December 24th to January 1st for the holiday season.',
        ]);

        Notice::create([
            'title' => 'Maintenance Scheduled for Server',
            'content' => 'The server will undergo maintenance on December 30th, starting at 10 PM. Expect brief outages.',
        ]);

        // Add more entries as needed
    }
}
