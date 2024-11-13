<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\SubField;
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



    public function create(Request $request)
    {
        $validate = $request->validate([
            "name" => "required|string|max:255",
            "color" => "required|string|max:255",
            "size" => "required|int|max:255",
        ]);
    
        $field = Field::create($validate);
    
        if ($field) {
            return response()->json([
                "message" => "Field Created Successfully",
                "data" => $field->fresh(),
            ], 200);
        } else {
            return response()->json([
                "message" => "An error occurred while creating the field",
            ], 500);
        }
    }
    


    public function updateField(Request $request , string $id){
        $validate =  $request->validate([
              "name"=> "sometimes",
              "color"=>"sometimes",
              "size" => "sometimes",
          ]);
         
  
          $field = Field::where("id", $id)->first();
          $field->update($validate);
  
          if($field){
              return response()->json([
                  "message"=> "Fields Updated Successfully",
                  "data"=>$field->fresh()
              ], 200);
          }else{
              return response()->json([
                  "message"=> "Some Error Occured",
               
              ]);
          }
          
      }



      public function deleteField(Request $request, string $id)
      {
          // Find the field by ID
          $field = Field::find($id);
      
          if ($field) {
              // Attempt to delete the field
              $field->delete();
      
              return response()->json([
                  "message" => "Field Deleted Successfully",
              ], 200);
          } else {
              return response()->json([
                  "message" => "Field not found",
              ], 404);
          }
      }
      
    public function createSubField(Request $request){
       
          $validate = $request->validate([
            "field_id"=>"required",
            "name" => "required|string|max:255",
            "color" => "required|string|max:255",
            "size" => "required|int|max:255",
        ]);
  
          $field = SubField::create($validate);
  
  
          if($field){
              return response()->json([
                  "message"=> "Fields Created Successfully",
                  "data"=>$field->fresh()
              ], 200);
          }else{
              return response()->json([
                  "message"=> "Some Error Occured",
               
              ]);
          }
  
          
      }

      public function deleteSubField(Request $request, string $id)
      {
          // Find the field by ID
          $field = SubField::find($id);
      
          if ($field) {
              // Attempt to delete the field
              $field->delete();
      
              return response()->json([
                  "message" => "Field Deleted Successfully",
              ], 200);
          } else {
              return response()->json([
                  "message" => "Field not found",
              ], 404);
          }
      }
      

      public function updateSubField(Request $request ,string $id ){
        $validate =  $request->validate([
            "field_id"=>"sometimes",
              "name"=> "sometimes",
              "color"=>"sometimes",
              "size" => "sometimes",
          ]);
          
          $field = SubField::where("id", $id)->first();
          $field->update($validate);
  
          if($field){
              return response()->json([
                  "message"=> "Fields Updated Successfully",
                  "data"=>$field->fresh()
              ], 200);
          }else{
              return response()->json([
                  "message"=> "Some Error Occured",
               
              ]);
          }
  
          
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
