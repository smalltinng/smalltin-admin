<?php
namespace Database\Seeders;

use App\Models\MonthlyStats;
use Illuminate\Database\Seeder;
use App\Models\Winner;
use App\Models\User;
use Carbon\Carbon;

class WinnerSeeder extends Seeder
{
  static  public function run()
    {
        $users = User::all();

        // Assuming you have some users created in UserSeeder
        $lastMonthWinners = $users->take(5); // Adjust as needed
        $currentWinners = $users->slice(5, 5); // Adjust as needed

        foreach ($lastMonthWinners as $user) {
            Winner::create([
                'user_id' => $user->id,
                'correct_answers' => rand(10, 20),
                'incorrect_answers' => rand(0, 5),
                'total_attempts' => rand(15, 25),
                'month' => Carbon::now()->subMonth()->startOfMonth()->toDateString(), // Full date format
            ]);
            MonthlyStats::create([
                'user_id' => $user->id,
                'correct_answers' => rand(10, 20),
                'incorrect_answers' => rand(0, 5),
                'total_attempts' => rand(15, 25),
                'month' => Carbon::now()->subMonth()->startOfMonth()->toDateString(), // Full date format
            ]);
        }

        foreach ($currentWinners as $user) {
            Winner::create([
                'user_id' => $user->id,
                'correct_answers' => rand(10, 20),
                'incorrect_answers' => rand(0, 5),
                'total_attempts' => rand(15, 25),
                'month' => Carbon::now()->startOfMonth()->toDateString(), // Full date format
            ]);
            MonthlyStats::create([
                'user_id' => $user->id,
                'correct_answers' => rand(10, 20),
                'incorrect_answers' => rand(0, 5),
                'total_attempts' => rand(15, 25),
                'month' => Carbon::now()->startOfMonth()->toDateString(), // Full date format
            ]);
        }
    }
}
