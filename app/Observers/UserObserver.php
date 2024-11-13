<?php

namespace App\Observers;

use App\Models\User;
use App\Jobs\IncrementUserCount;
use App\Models\Setting;
use App\Models\Conversation;
use Illuminate\Support\Facades\Log;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        // IncrementUserCount::dispatch($user);
         // Find the setting record (assuming you have one record for settings)
         try {
            $setting = Setting::first();
    
            if ($setting) {
               $user = $user; // Ensure $userId is correctly set or passed
    
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

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
