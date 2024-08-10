<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Setting;
use App\Models\Conversation;
use App\Models\User;
use Illuminate\Support\Facades\Log;
class IncrementUserCount implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;

    /**
     * Create a new job instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Find the setting record (assuming you have one record for settings)
        try {
            $setting = Setting::first();
    
            if ($setting) {
               $user = $this->user; // Ensure $userId is correctly set or passed
    
                if ($user) {


                    $setting->total_users = $setting->total_users + 1;
                    $setting->save();

                    $conversation = Conversation::create();
                    $conversation->user()->attach($user);
    
                   
                    Log::error('User found for ID: ' . $user);

                } else {
                    Log::error('User not found for ID: ' . $user);
                }
            } else {
                Log::error('Settings not found.');
            }
        } catch (\Exception $e) {
            Log::error('Job failed: ' . $e->getMessage());
        }
    }
}
