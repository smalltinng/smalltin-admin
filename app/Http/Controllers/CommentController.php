<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecommentRequest;
use App\Http\Requests\UpdatecommentRequest;
use App\Models\Comment;
use App\Models\MonthlyStats;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of comments for a specific MonthlyStat.
     */
  public function index($monthlyStatId)
{
    $monthlyStat = MonthlyStats::findOrFail($monthlyStatId);
    $comments = $monthlyStat->comments()->with('user')
        ->orderBy('created_at', 'desc') // Order comments by created_at in descending order
        ->get();

    return response()->json([
        'comments' => $comments
    ]);
}

    /**
     * Store a newly created comment in storage.
     */
    public function store(Request $request, $monthlyStatId)
{
    try {
        // Validate the request data
        $request->validate([
            'comment' => 'required|string|max:500',
        ]);

        // Find the MonthlyStat by its ID or throw an exception
        $monthlyStat = MonthlyStats::findOrFail($monthlyStatId);

        // Create the new comment associated with the MonthlyStat
        $comment = Comment::create([
            'user_id' => auth()->id(), // Assuming the user is authenticated
            'monthly_stats_id' => $monthlyStat->id,
            'comment' => $request->input('comment'),
        ]);

        // Return success response with the created comment
        return response()->json([
            'message' => 'Comment created successfully',
            'data' => $comment
        ], 201); // 201 indicates the resource was created
    } catch (\Illuminate\Validation\ValidationException $e) {
        // Handle validation exceptions
        return response()->json(['error' => $e->errors()], 422); // 422 Unprocessable Entity
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        // Handle model not found exceptions
        return response()->json(['error' => 'MonthlyStat not found.'], 404); // 404 Not Found
    } catch (\Exception $e) {
        // Handle other exceptions
        return response()->json(['error' => 'An unexpected error occurred.' . $e->getMessage()], 500); // 500 Internal Server Error
    }
}

    /**
     * Update the specified comment.
     */
    public function update(Request $request, $id)
{
    // Validate the incoming request
    $request->validate([
        'comment' => 'required|string|max:500',
    ]);

    try {
        // Attempt to find the comment by ID
        $comment = Comment::findOrFail($id);

        // Ensure the user can only update their own comments
        if ($comment->user_id != Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Update the comment
        $comment->update([
            'comment' => $request->input('comment'),
        ]);

        // Return the updated comment
        return response()->json([
            'message' => 'Comment updated successfully',
            'data' => $comment
        ], 200);

    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        // Handle case where the comment is not found
        return response()->json([
            'error' => 'Comment not found'
        ], 404); // Return 404 Not Found
    } catch (\Exception $e) {
        // Handle any other unexpected errors
        return response()->json([
            'error' => 'An unexpected error occurred'
        ], 500); // Return 500 Internal Server Error
    }
}

    /**
     * Remove the specified comment.
     */
    public function destroy($id)
    {
        try {
            // Attempt to find the comment by ID
            $comment = Comment::findOrFail($id);
    
            // Ensure the user can only delete their own comments
            if ($comment->user_id != Auth::id()) {
                return response()->json(['error' => 'Unauthorized'], 403);
            }
    
            // Delete the comment
            $comment->delete();
    
            // Return success message
            return response()->json(['message' => 'Comment deleted successfully'], 200);
    
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Handle case where the comment is not found
            return response()->json(['error' => 'Comment not found'], 404); // 404 Not Found
        } catch (\Exception $e) {
            // Handle any other unexpected errors
            return response()->json(['error' => 'An unexpected error occurred'], 500); // 500 Internal Server Error
        }
    }
    
}
