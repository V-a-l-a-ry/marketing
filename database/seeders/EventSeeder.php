<?php

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'name' => 'Annual Tech Conference 2024',
            'type' => 'Conference',
            'location' => 'Main Campus',
            'date' => '2024-03-15',
            'attendees' => 250,
        ]);

        Event::create([
            'name' => 'Digital Marketing Workshop',
            'type' => 'Workshop',
            'location' => 'Business School',
            'date' => '2024-04-05',
            'attendees' => 75,
        ]);
    }
}
