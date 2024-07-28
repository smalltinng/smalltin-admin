<?php

namespace Database\Seeders;

use App\Models\Field;
use App\Models\SubField;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 static   public function run(): void
    {
       // Ensure fields and subfields are loaded
       $fields = Field::with('subfields')->get();

       // Create 20 users
       User::factory()->count(20)->create()->each(function ($user) use ($fields) {
           // Attach random fields to each user
           $randomFields = $fields->random(rand(1, 5));
           $user->fields()->sync($randomFields->pluck('id')->toArray());

           // Collect subfields based on assigned fields
           $randomSubFields = [];
           foreach ($randomFields as $field) {
               $subfields = $field->subfields->pluck('id')->toArray();
               $randomSubFields = array_merge($randomSubFields, array_slice($subfields, 0, rand(1, min(5, count($subfields)))));
           }
           $user->subfields()->sync($randomSubFields);
       });
    }
}
