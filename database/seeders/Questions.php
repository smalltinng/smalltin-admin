<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class Questions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuestionSeeder::run();
        QuestionSeeder2::run();
        QuestionSeeder3::run();
        QuestionSeeders4::run();
        QuestionSeeder5::run();
        QuestionSeeder18::run();
        BusinessAndFinance::run();
        Sport17::run();
        MathematicsSeeders::run();
        Literature::run();
        VisualArts::run();
        History::run();
    }
}
