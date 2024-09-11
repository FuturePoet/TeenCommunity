<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            [
                'title' => 'Introduction to Coding',
                'description' => 'Learn the basics of coding with this introductory course.',
                'category' => 'coding',
                'link' => 'https://example.com/intro-to-coding',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Digital Marketing Essentials',
                'description' => 'Understand the fundamentals of digital marketing strategies.',
                'category' => 'marketing',
                'link' => 'https://example.com/digital-marketing-essentials',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Graphic Design Basics',
                'description' => 'Explore the core principles of graphic design.',
                'category' => 'graphic design',
                'link' => 'https://example.com/graphic-design-basics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Photoshop for Beginners',
                'description' => 'A comprehensive guide to getting started with Photoshop.',
                'category' => 'photoshop',
                'link' => 'https://example.com/photoshop-for-beginners',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
