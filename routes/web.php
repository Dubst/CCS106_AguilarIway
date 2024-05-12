<?php

use App\Http\Controllers\addstudentcontroller;
use App\Http\Controllers\addTeacherController;
use App\Http\Controllers\addCourseController;
use App\Http\Controllers\addLoadController;
use App\Http\Controllers\addEnrollController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\LoadController;
use App\Http\Controllers\EnrollController;
use App\Models\Student;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Enroll;
use App\Models\Load;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', [ DashboardController::class, 'index']);

Route::get('/', function (){
    return view('welcome');
});

Route::get('/student', [ StudentController::class, 'index'])->name('student');

Route::post('/addStudent', [ addstudentcontroller::class, 'index'])->name('addStudent.create');


Route::get('/addstudent', function (){
    return view('addStudent');
});

Route::get('/edit/{id}', [StudentController::class, 'show']);
Route::post('/edit/{id}', [StudentController::class, 'cover'])->name('editstudent');


//course
Route::get('/course', [ CourseController::class, 'index'])->name('course');
Route::get('/addcourse', function (){
    return view('addCourse');
});
Route::post('/addcourse', [ addCourseController::class, 'index'])->name('addCourse.create');
Route::get('/editcourse/{id}', [CourseController::class, 'show']);
Route::post('/editcourse/{id}', [CourseController::class, 'update']);

//teacher
Route::get('/teacher', [ TeacherController::class, 'index'])->name('teacher');

Route::post('/addTeacher', [ addTeacherController::class, 'index'])->name('addteacher.create');

Route::get('/addteacher', function (){
    return view('addTeacher');
});
Route::get('/editteacher/{id}', [TeacherController::class, 'show']);
Route::post('/editteacher/{id}', [TeacherController::class, 'update']);

//teacher's Load
Route::get('/addload', function () {
    $teachers = Teacher::all();
    $courses = Course::all();
    return view('addLoad', compact('teachers', 'courses'));
});


Route::post('/addload', [addLoadController::class, 'index'])->name('addload.create');

Route::get('/load', [LoadController::class, 'index'])->name('load');
Route::get('/editload/{id}', [LoadController::class, 'show']);
Route::post('/editload/{id}', [LoadController::class, 'update'])->name('editload.update');


//Enrollment
Route::get('/addenroll', function () {
    $students = Student::all();
    $courses = Course::all();
    return view('addEnroll', compact('students', 'courses'));
});


Route::post('/addenroll', [addEnrollController::class, 'index'])->name('addenroll.create');

Route::get('/enroll', [EnrollController::class, 'index'])->name('enroll');
Route::get('/editload/{id}', [EnrollController::class, 'show']);
Route::post('/editload/{id}', [EnrollController::class, 'update'])->name('editload.update');
