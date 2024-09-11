<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reviews')->insert([
            ['user_id' => 1, 'review' => 'This community is amazing! It provides valuable resources and opportunities for teens.', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'review' => 'I have learned so much from the courses and events offered here.', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'review' => 'Great platform with excellent support for teens looking to improve their skills.', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 4, 'review' => 'The events are very engaging and well-organized.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
