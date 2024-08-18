<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;
use Inertia\Inertia;
class FieldsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $fields = Field::with("subFields")->get();
        $success = [
            'message'=> "field Fecth successfully",
            'fields'=>$fields,

        ];
        return response()->json($success, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function getForadmin()
    {
        $fields = Field::with("subFields")->paginate(50);
        $success = [
            'message'=> "field Fecth successfully",
            'fields'=>$fields,

        ];
        return response()->json($success, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return Inertia::render('Fields');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
