<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MonthlyStatsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'correct_answers' => $this->correct_answers,
            'incorrect_answers' => $this->incorrect_answers,
            'total_attempts' => $this->total_attempts,
            'comment_count' => $this->comments->count(), // Use the already loaded comments
            'monthly_jobs' => $this->monthly_jobs,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user' => [
                'id' => $this->user->id,
                'username' => $this->user->username,
                'email' => $this->user->email,
                'user_bio' => $this->user->user_bio,
                'profile' => $this->user->profile,
            ],
        ];
    }
}
