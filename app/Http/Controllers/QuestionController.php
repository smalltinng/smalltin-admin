<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Models\Question;
use Illuminate\Http\Request;
use Inertia\Inertia;


class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render("QuestionBank");
    }


    public function get_all_question(Request $request)
    {
        try {
            // Get the 'per_page' from the request, default to 50 if not provided
            $perPage = $request->input('per_page', 50);

            // Get the 'field_id' and 'search' parameters from the request
            $field_id = $request->input('field_id');
            $search = $request->input('search');

            // Start the query with the 'field' relation
            $query = Question::with('field');

            // Apply filtering based on 'field_id' if provided
            if ($field_id) {
                $query->where('field_id', $field_id);
            }

            // Apply filtering based on 'search' if provided
            if ($search) {
                $query->where('question_text', 'like', "%{$search}%");
            }

            // Paginate the questions with the specified per_page value
            $questions = $query->paginate($perPage);

            return response()->json([
                'message' => 'Successfully retrieved questions.',
                'data' => $questions
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while fetching questions.',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function getQuestionByQuery(Request $request)
    {
        $query = Question::query();

        // Filter by field_id if provided
        if ($request->has('field_id') && !empty($request->input('field_id'))) {
            $query->where('field_id', $request->input('field_id'));
        }

        // Filter by subfield_id if provided
        if ($request->has('subfield_id') && !empty($request->input('subfield_id'))) {
            $query->where('sub_fields_id', $request->input('subfield_id'));
        }

        // Pagination with a default of 50 records per page, adjust as necessary
        $questions = $query->paginate(50);

        return response()->json([
            'message' => "Successfully fetched questions",
            'data' => $questions
        ]);
    }



    /**
     * Show the form for creating a new resource.c
     */
    public function create(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            "field_id" => "required|integer|exists:fields,id", // Ensure field_id exists in the fields table
            "sub_fields_id" => "required|integer|exists:sub_fields,id", // Ensure sub_fields_id exists in the sub_fields table
            "question" => "required|string",
            "a" => "required|string",
            "b" => "required|string",
            "c" => "sometimes|string",
            "d" => "sometimes|string",
            "answer" => "required|string"
        ]);

        // Create a new question record
        $question = Question::create([
            'field_id' => $validatedData['field_id'],
            'sub_fields_id' => $validatedData['sub_fields_id'],
            'question' => $validatedData['question'],
            'a' => $validatedData['a'],
            'b' => $validatedData['b'],
            'c' => $validatedData['c'] ?? null, // Allow null if not provided
            'd' => $validatedData['d'] ?? null, // Allow null if not provided
            'answer' => $validatedData['answer']
        ]);

        // Return success response with the created question details
        return response()->json([
            "message" => "Question created successfully",
            "data" => $question // Include the created question in the response
        ], 201); // 201 Created status code
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'question' => 'required|string',
            'a' => 'required|string',
            'b' => 'required|string',
            'c' => 'nullable|string',
            'd' => 'nullable|string',
            'answer' => 'required|string',
        ]);

        $question = Question::find($id);

        if (!$question) {
            return response()->json(['message' => 'Question not found'], 404);
        }

        $question->update([
            'question' => $validatedData['question'],
            'a' => $validatedData['a'],
            'b' => $validatedData['b'],
            'c' => $validatedData['c'] ?? null,
            'd' => $validatedData['d'] ?? null,
            'answer' => $validatedData['answer'],
        ]);

        return response()->json(['message' => 'Question updated successfully', "data" => $question->fresh()], 200);
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    { {
            // Find the field by ID
            $question = Question::find($id);

            if ($question) {
                // Attempt to delete the field
                $question->delete();

                return response()->json([
                    "message" => "Question Deleted Successfully",
                ], 200);
            } else {
                return response()->json([
                    "message" => "Question not found",
                ], 404);
            }
        }
    }

    //

}