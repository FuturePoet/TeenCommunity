<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('events')->insert([
            [
                'title' => 'Cinema Night',
                'description' => 'A night of classic films.',
                'category' => 'cinema',
                'link' => 'https://example.com/cinema-night', // URL or other relevant link
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Art Exhibition',
                'description' => 'Showcasing teen art.',
                'category' => 'arts',
                'link' => 'https://example.com/art-exhibition', // URL or other relevant link
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'History Talk',
                'description' => 'Discussion on historical events.',
                'category' => 'history',
                'link' => 'https://example.com/history-talk', // URL or other relevant link
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sports Day',
                'description' => 'A day of various sports activities.',
                'category' => 'sports',
                'link' => 'https://example.com/sports-day', // URL or other relevant link
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
