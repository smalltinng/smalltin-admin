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
      return  Inertia::render("QuestionBank");
    }


    public function get_all_question()
{
    $questions = Question::paginate(50); // 50 records per page
    return response()->json(['messages' => "Successfully", "data" => $questions]);
}
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
     $validataData =   $request->validate([
            "field_id" =>"required|int",
            "sub_fields_id" => "required|int",
            "question" =>"required",
            "a" => "required",
            "b"  => "required",
            "c"  => "sometimes",
            "d"  => "sometimes",
            "answer" => "required"
        ]);

        $question = Question::create($validataData);

        return response()->json([
            "message"=>"question created successfuly"
        ]);

        
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
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
