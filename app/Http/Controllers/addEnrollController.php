<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class addEnrollController extends Controller
{
    public function index(){
        $enroll = Enroll::create([
            'student_id' => request()->get('student_id', ''),
            'course_id' => request()->get('course_id', ''),

        ]);

    return redirect()->route('enroll')->with('success', 'Sucessfully Registered!');

    }
}
