<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    //READ
    public function index()
    {
        $students = Student::all();
        return view('index', compact('students'));
    }

    //return to blade
    public function create()
    {
        return view('create');
    }

    //return to blade
    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit', compact('student'));
    }

    //Create
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request['name'];
        $student->class = $request['class'];
        $student->rollNo = $request['rollNo'];
        $student->save();
        return redirect::route("students.index");
    }

    //Update
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request['name'];
        $student->class = $request['class'];
        $student->rollNo = $request['rollNo'];
        $student->save();
        return redirect::route("students.index");
    }

    //Delete
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect::route("students.index");
    }
}
