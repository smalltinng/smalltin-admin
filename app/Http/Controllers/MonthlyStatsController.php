<?php

namespace App\Http\Controllers;

use App\Models\MonthlyStats;
use App\Http\Requests\StoreMonthlyStatsRequest;
use App\Http\Requests\UpdateMonthlyStatsRequest;
use Illuminate\Support\Carbon;
use App\Http\Resources\MonthlyStatsResource;
class MonthlyStatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
       
            $ladders = MonthlyStats::where('month', Carbon::now()->format('Y-m'))
                ->orderByDesc('correct_answers')
                ->with('user')
                ->paginate(50);
                

                $res = [
                    'current_page' => $ladders->currentPage(),
                    'data' => MonthlyStatsResource::collection($ladders),
                    'first_page_url' => $ladders->url(1),
                    'from' => $ladders->firstItem(),
                    'last_page' => $ladders->lastPage(),
                    'last_page_url' => $ladders->url($ladders->lastPage()),
                    'links' => $ladders->linkCollection(),
                    'next_page_url' => $ladders->nextPageUrl(),
                    'path' => $ladders->path(),
                    'per_page' => $ladders->perPage(),
                    'prev_page_url' => $ladders->previousPageUrl(),
                    'to' => $ladders->lastItem(),
                    'total' => $ladders->total(),
                ];
                return response()->json(["data"=> $res]);
    
        


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMonthlyStatsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MonthlyStats $monthlyStats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MonthlyStats $monthlyStats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMonthlyStatsRequest $request, MonthlyStats $monthlyStats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MonthlyStats $monthlyStats)
    {
        //
    }
}
