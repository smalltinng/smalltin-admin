<?php

// app/Http/Controllers/LeaderboardController.php

namespace App\Http\Controllers;

use App\Models\MonthlyStats;
use App\Models\Winner;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Resources\MonthlyStatsResource;

class LeaderboardController extends Controller
{
    public function realTime()
    {
        $users = MonthlyStats::where('month', Carbon::now()->format('Y-m'))
            ->orderByDesc('correct_answers')
            ->limit(10)
            ->with('user')
            ->get();
            $monthlyStats = MonthlyStatsResource::collection($users);
            return response()->json(["data"=> $users]);

    }

    public function weeklyTop()
    {
        $users = MonthlyStats::whereBetween('updated_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->orderByDesc('correct_answers')
            ->limit(10)
            ->with('user')
            ->get();

            $monthlyStats = MonthlyStatsResource::collection($users);
            return response()->json(["data"=> $users]);

    }

    public function lastWeekTop()
    {
        $users = MonthlyStats::whereBetween('updated_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])
            ->orderByDesc('correct_answers')
            ->limit(10)
            ->with('user')
            ->get();
        return response()->json(["data"=> $users]);
    }


    public function lastMonthTop()
{
    // Get the last month in 'Y-m' format
    $lastMonth = Carbon::now()->subMonth()->format('Y-m');

    // Fetch top 10 users with the highest 'correct_answers' for the last month
    $users = MonthlyStats::where('month', $lastMonth)
        ->orderByDesc('monthly_jobs')
        ->limit(10)
        ->with('user')
        ->get();

    return response()->json(["data" => $users]);
}
    public function monthlyWinners()
    {
        $winners = Winner::orderByDesc('month')->limit(10)->with('user')->get();
        return response()->json($winners);
    }
}
