<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecommentRequest;
use App\Http\Requests\UpdatecommentRequest;
use App\Models\comment;
use App\Models\MonthlyStats;
use Auth;
use Request;

class CommentController extends Controller
{
    /**
     * Display a listing of comments for a specific MonthlyStat.
     */
    public function index($monthlyStatId)
    {
        $monthlyStat = MonthlyStats::findOrFail($monthlyStatId);
        $comments = $monthlyStat->comments()->with('user')->get(); // Fetch comments with user data

        return response()->json([
            'comments'=> $comments
            
        ]);
    }

    /**
     * Store a newly created comment in storage.
     */
    public function store(Request $request, $monthlyStatId)
    {
        $request->validate([
            'comment' => 'required|string|max:500',
        ]);

        $monthlyStat = MonthlyStats::findOrFail($monthlyStatId);

        $comment = Comment::create([
            'user_id' => Auth::id(), // Assuming the user is authenticated
            'monthly_stat_id' => $monthlyStat->id,
            'comment' => $request->input('comment'),
        ]);

        return response()->json($comment, 201); // 201 indicates the resource was created
    }

    /**
     * Update the specified comment.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|string|max:500',
        ]);

        $comment = Comment::findOrFail($id);

        // Ensure the user can only update their own comments
        if ($comment->user_id != Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $comment->update([
            'comment' => $request->input('comment'),
        ]);

        return response()->json($comment);
    }

    /**
     * Remove the specified comment.
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);

        // Ensure the user can only delete their own comments
        if ($comment->user_id != Auth::id()) {

            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $comment->delete();

        return response()->json(['message' => 'Comment deleted successfully']);
    }
}
