<?php
// database/seeders/EventSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run()
    {
        Event::create([
            'name' => 'Tech Conference 2024',
            'type' => 'Conference',
            'location' => 'New York',
            'date' => now()->addDays(15),
            'attendees' => 120
        ]);

        Event::create([
            'name' => 'Web Development Workshop',
            'type' => 'Workshop',
            'location' => 'London',
            'date' => now()->addDays(10),
            'attendees' => 50
        ]);

        Event::create([
            'name' => 'AI Summit 2024',
            'type' => 'Conference',
            'location' => 'San Francisco',
            'date' => now()->addDays(30),
            'attendees' => 200
        ]);
    }
}
