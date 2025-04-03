<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\MonthlyStats;
use Illuminate\Support\Carbon;

class SaveMonthlyStats implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;





    protected $user;
    protected $quizData;
    protected $correctCount;
    protected $incorrectCount;
    protected $questionsCount;
    /**
     * Create a new job instance.
     */
    public function __construct($user, $correctCount, $incorrectCount, $questionsCount)
    {
        $this->user = $user;
        $this->correctCount = $correctCount;
        $this->incorrectCount = $incorrectCount;
        $this->questionsCount = $questionsCount;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {


        if ($this->user) {
            $currentMonth = Carbon::now()->format('Y-m');


            $score = $this->correctCount * 10;



            // Find the existing MonthlyStats record or create a new one
            $monthlyStats = MonthlyStats::firstOrNew([
                'user_id' => $this->user->id,
                'month' => $currentMonth
            ]);

            // Update the accumulated statistics
            $monthlyStats->correct_answers += $this->correctCount;
            $monthlyStats->incorrect_answers += $this->incorrectCount;
            $monthlyStats->total_attempts += $this->questionsCount;
            $monthlyStats->monthly_jobs += $score;

            // Save the updated MonthlyStats record
            $monthlyStats->save();

            $this->user->total_question_correct += $this->correctCount;
            $this->user->total_question_attempt += $this->questionsCount;
            $this->user->jobs += $score; // Assuming `jobs` is an integer field

            //Save the updated User record
            $this->user->save();
        }
    }
}