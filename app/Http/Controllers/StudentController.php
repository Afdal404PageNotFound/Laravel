<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Course;

class StudentController extends Controller
{

    public function index()
    {
        $student = Student::all();

        return view('admin.contents.student.index',[
            'student' => $student
        ]);
    }

    public function create()
    {
        return view('admin.contents.student.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}

