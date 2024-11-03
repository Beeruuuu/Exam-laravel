<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeSeeder extends Seeder
{

    public function run()
    {
        DB::table('resumes')->insert([ // The table name matches in database table
            'name' => 'Kylle M. Dela Cruz',
            'title' => 'IT Student | Figma Designer',
            'about_me' => 'I am an IT Student at Baliwag Polytechnic College, 22 years old and live in Pagala Baliwag Bulacan and am trying to pursue to become a front end dev or figma designer.',
            'hobbies' => json_encode(['Drawing', 'Watching Movies and Anime', 'Playing Games']),
            'education' => json_encode([
                [
                    'degree' => 'Bachelor of Science in Information Technology',
                    'institution' => 'Baliwag Polytechnic College',
                    'year' => 'Present',
                ],
                [
                    'degree' => 'Senior High School',
                    'institution' => 'Baliuag University',
                    'year' => '2018-2020',
                ],
                [
                    'degree' => 'Junior High School',
                    'institution' => 'Mariano Ponce National High School',
                    'year' => '2015-2018',
                ],
                [
                    'degree' => 'Elementary School',
                    'institution' => 'Jacinto Ponce Elementary School',
                    'year' => '2009-2015',
                ],
            ]),
            'email' => 'katsucare@gmail.com',
            'contact_number' => '(+63) 912-34567-892',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}