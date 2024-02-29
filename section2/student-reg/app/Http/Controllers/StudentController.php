<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function viewForm() {
        return view('student-form');
    }
    public function storeData(Request $request) {
        $request->validate([
            'email' => 'required|email|unique:students,email',
        ]);

        Student::create($request->all());
        return redirect('/student-form')->with('message','form submitted!');
    }

    public function viewList() {
        $students = Student::all();
        return view('student-list',['students'=>$students]);
    }
}
