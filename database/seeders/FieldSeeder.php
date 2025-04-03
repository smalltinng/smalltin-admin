<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Field;
use App\Models\SubField;
use Illuminate\Support\Arr;

class FieldSeeder extends Seeder
{
    public static function run()
    {
        $fields = [
            'Physics' => [
                'Classical Mechanics',
                'Quantum Mechanics',
                'Thermodynamics',
                'Electromagnetism',
                'Astrophysics'
            ],
            'Chemistry' => [
                'Organic Chemistry',
                'Inorganic Chemistry',
                'Physical Chemistry',
                'Analytical Chemistry',
                'Biochemistry'
            ],
            'Biology' => [
                'Botany',
                'Zoology',
                'Genetics',
                'Ecology',
                'Microbiology'
            ],
            'Computer Science' => [
                'Programming',
                'Data Structures and Algorithms',
                'Artificial Intelligence',
                'Machine Learning',
                'Cybersecurity'
            ],
            'Programming' => [
                'Programming',
                'Data Structures and Algorithms',
                'Artificial Intelligence',
                'Machine Learning',
                'Cybersecurity'
            ], 'Cybersecurity' => [
                'Programming',
                'Data Structures and Algorithms',
                'Artificial Intelligence',
                'Machine Learning',
                'Cybersecurity'
            ],
            'Machine Learning (and) AI' => [
                'Programming',
                'Data Structures and Algorithms',
                'Artificial Intelligence',
                'Machine Learning',
                'Cybersecurity'
            ],
            'Engineering' => [
                'Civil Engineering',
                'Mechanical Engineering',
                'Electrical Engineering',
                'Chemical Engineering',
                'Aerospace Engineering'
            ],
            'Mathematics' => [
                'Algebra',
                'Geometry',
                'Calculus',
                'Statistics',
                'Number Theory'
            ],
            'History' => [
                'World History',
                'Ancient History',
                'Medieval History',
                'Modern History',
                'Art History'
            ],
            'Literature' => [
                'Poetry',
                'Fiction',
                'Drama',
                'Non-fiction',
                'Literary Criticism'
            ],
            'Visual Arts' => [
                'Painting',
                'Sculpture',
                'Photography',
                'Drawing',
                'Graphic Design'
            ],
            'Music' => [
                'Classical Music',
                'Jazz',
                'Pop',
                'Rock',
                'World Music'
            ],
            'Film and Cinema' => [
                'Film Theory',
                'Directors and Movements',
                'Cinematography',
                'Screenwriting',
                'Film History'
            ],
            'Geography' => [
                'Physical Geography',
                'Geomorphology',
                'Climatology',
                'Hydrology',
                'Biogeography',
                'Human Geography',
                'Urban Geography',
                'Economic Geography',
                'Political Geography',
                'Cultural Geography',
                'Cartography',
                'Geopolitics',
                'Remote Sensing'
            ],
            'Language and Linguistics' => [
                'Linguistic Theory',
                'Phonetics and Phonology',
                'Morphology',
                'Syntax',
                'Semantics'
            ],
            'Current Events' => [
                'Politics',
                'Economics',
                'Social Issues',
                'Environment',
                'Global Affairs'
            ],
            'Health and Wellness' => [
                'Nutrition',
                'Exercise Science',
                'Public Health',
                'Medicine',
                'Psychology'
            ],
            'Business and Finance' => [
                'Finance',
                'Marketing',
                'Management',
                'Entrepreneurship',
                'Accounting'
            ],
            'Sports' => [
                'Football (Soccer)',
                'Basketball',
                'Tennis',
                'Cricket',
                'Athletics'
            ],
            'Miscellaneous' => [
                'Pop Culture',
                'Mythology',
                'Hobbies and Interests',
                'General Knowledge',
                'Fun Facts'
            ]
        ];


        $fieldsKey = array_keys($fields);
        for ($i = 0; $i < count($fields); $i++) {
            $fa = Field::create([
                'name' => $fieldsKey[$i],
                'color' => '#' . substr(md5(rand()), 0, 6),
                'size' => strlen($fieldsKey[$i]) * 10
            ]);

    
        }
    }
}