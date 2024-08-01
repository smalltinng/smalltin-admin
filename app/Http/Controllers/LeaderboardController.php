<?php

// app/Http/Controllers/LeaderboardController.php

namespace App\Http\Controllers;

use App\Models\MonthlyStats;
use App\Models\Winner;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LeaderboardController extends Controller
{
    public function realTime()
    {
        $users = MonthlyStats::where('month', Carbon::now()->startOfMonth())
            ->orderByDesc('correct_answers')
            ->limit(10)
            ->with('user')
            ->get();
            return response()->json(["data"=> $users]);

    }

    public function weeklyTop()
    {
        $users = MonthlyStats::whereBetween('updated_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->orderByDesc('correct_answers')
            ->limit(10)
            ->with('user')
            ->get();
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

    public function monthlyWinners()
    {
        $winners = Winner::orderByDesc('month')->limit(10)->with('user')->get();
        return response()->json($winners);
    }
}
