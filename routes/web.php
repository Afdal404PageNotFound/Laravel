<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

/**
 * Method HTTP:
 * 1. Get = Menampilkan halaman
 * 2. Post = mengirim data
 * 3. Put = meng-update data
 * 4. Delete = mengapus data
 */

// route untuk menampilkan teks
Route::get('admin/dashboard', [DashboardController::class, 'index']);

Route::get('admin/student', [StudentController::class, 'index']);

Route::get('admin/student/create', [StudentController::class, 'create']);

Route::get('admin/student/store', [StudentController::class, 'store']);


require __DIR__.'/auth.php';
