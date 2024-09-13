<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;
use Symfony\Contracts\Service\Attribute\Required;

class StudentController extends Controller
{
    // API GET Method
    function list()
    {
        return Student::all();
    }
    // API POST Method / Validation Of API
    function addstudent(Request $request)
    {
        $rules = array(
            'name' => 'required|min:2|max:20',
            'email' => 'required|email',
            'phone' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return $validator->errors();
        } else {
            $student = new Student();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->phone = $request->phone;
            if ($student->save()) {
                return ["Result" => "Student Added"];
            } else {
                return ["Result" => "Please Retry"];;
            }
        }
    }
    // API PUT Method
    function updatastudent(Request $request)
    {
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;

        if ($student->save()) {
            return ["Result" => "Update Successful :)"];
        } else {
            return ["Result" => "Update Unsuccessful :)"];
        }
    }
    // API DELETE Method
    function deletestudent($id)
    {
        $student = Student::destroy($id);

        if ($student) {
            return ['Result' => "Record Deleted"];
        } else {
            return ['Result' => "Record Not Found"];
        }
    }
    // API use for find an id 
    function searchstudent($name)
    {
        $student = Student::where('name', 'like', "%$name%")->get();

        if ($student) {
            return ["Result" => $student];
        } else {
            return ["Result" => "Record Not Found"];
        }
    }
    // Validation of API

}
