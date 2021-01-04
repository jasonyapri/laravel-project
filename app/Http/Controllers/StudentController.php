<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index()
    {
        $data['students'] = Student::all();
        return view('student.index', ['data' => $data]);
    }

    public function createStudent(Request $req)
    {
        Student::create($req->all());
        return redirect('/student')->with('success', 'Successfully added student!');
    }

    public function editStudent($id)
    {
        $student = Student::find($id);
        return view('student.edit', ['student' => $student]);
    }

    public function editStudentAction(Request $req, $id)
    {
        $student = Student::find($id);
        $student->update($req->all());
        return redirect('/student')->with('success', "Successfully edited student");
    }

    public function deleteStudent($id)
    {
        $student = Student::find($id);
        $student->delete($student);
        
        return redirect('/student')->with('success', "Successfully deleted student");
    }

    public function testHelperClass()
    {
        return view('student.testHelperClass');
    }
}
