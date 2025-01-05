<?php
// database/seeders/SubscriberSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscriber;
use App\Models\User;
use App\Models\Newsletter;

class SubscriberSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();  // Adjust to get a real user from the users table
        $newsletter = Newsletter::first();  // Adjust to get a real newsletter from the newsletters table

        Subscriber::create([
            'user_id' => $user->id,
            'newsletter_id' => $newsletter->id,
            'subscribed_at' => now(),
        ]);

        Subscriber::create([
            'user_id' => $user->id,
            'newsletter_id' => $newsletter->id,
            'subscribed_at' => now()->subDays(5),
        ]);
    }
}

