<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class addCourseController extends Controller
{
    public function index(){
        $course = Course::create([
            'code' => request()->get('code', ''),
            'course_name' => request()->get('course_name', ''),
            'location' => request()->get('location', ''),
            'schedule' => request()->get('schedule', ''),
            'unit' => request()->get('unit', ''),
            'section' => request()->get('section', ''),
        ]);

    return redirect()->route('course')->with('success', 'Sucessfully Registered!');

    }
}
