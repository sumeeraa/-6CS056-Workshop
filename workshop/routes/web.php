
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return redirect()->route('students.index');
});

// Student CRUD Routes
Route::resource('students', StudentController::class);

// Course CRUD Routes
Route::resource('courses', CourseController::class);
