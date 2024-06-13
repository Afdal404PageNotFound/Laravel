<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Method untuk menampilkan data course
    public function index(){
        // menarik data dari database
        $courses = Course::all();

        // panggil view dan kirim data courses
        return view('admin.contents.courses.index', [
            'courses' => $courses
        ]);
    } 

    // method untuk menampilkan form tambah course
    public function create (){
        // panggil view
        return view('admin.contents.courses.create');
    }

    // method untuk menyimpan data course
    public function store(Request $request)
    {
        // validasi data
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required'
        ]);

        // menyimpan data ke database
        Course::create($request->all());

        // redirect ke halaman course dengan pesan sukses
        return redirect()->route('admin.course')->with('success', 'Course created successfully.');
    }
}
