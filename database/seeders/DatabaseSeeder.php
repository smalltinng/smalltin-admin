<?php

namespace Database\Seeders;
use Database\Seeders\FieldSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        FieldSeeder::run();
        AdminSeeder::run();
        QuestionSeeder::run();
        QuestionSeeder2::run();
        QuestionSeeder3::run();
        

        // User::factory(10)->create();
    }
}
