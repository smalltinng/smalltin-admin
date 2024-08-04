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





    protected $userId;
    protected $quizData;
    /**
     * Create a new job instance.
     */
    public function __construct($userId, $quizData)
    {
        $this->userId = $userId;
        $this->quizData = $quizData;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $user = User::find($this->userId);

        if ($user) {
            $currentMonth = Carbon::now()->format('Y-m');

            // Find the existing MonthlyStats record or create a new one
            $monthlyStats = MonthlyStats::firstOrNew([
                'user_id' => $this->userId,
                'month' => $currentMonth
            ]);

            // Update the accumulated statistics
            $monthlyStats->correct_answers += $this->quizData['correct_count'];
            $monthlyStats->incorrect_answers += $this->quizData['incorrect_count'];
            $monthlyStats->total_attempts += count($this->quizData['questions']);

            // Save the updated MonthlyStats record
            $monthlyStats->save();

            // Calculate and update user stats
            $user->total_question_correct += $this->quizData['correct_count'];
            $user->total_question_attempt += count($this->quizData['questions']);
            $user->jobs += $this->quizData['correct_count'] * 50; // Assuming `jobs` is an integer field

            // Save the updated User record
            $user->save();
        }
    }
}
