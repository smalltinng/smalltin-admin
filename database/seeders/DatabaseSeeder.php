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

        // Questions::run();





    }
}