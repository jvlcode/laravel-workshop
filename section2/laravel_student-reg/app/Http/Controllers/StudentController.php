<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function viewForm() {
        $students = Student::all();
        return view('student-form',['students'=>$students]);
    }
    public function storeData(Request $request) {
        $request->validate([
            'email' => 'required|email|unique:students,email',
        ]);

        Student::create($request->all());
        return redirect('/student-form')->with('message','form submitted!');
    }
}
