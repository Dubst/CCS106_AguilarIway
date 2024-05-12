<?php

namespace App\Http\Controllers;

use App\Models\Load;
use App\Models\Teacher;
use App\Models\Course;
use Illuminate\Http\Request;

class addLoadController extends Controller
{
    public function index(){
        $load = Load::create([
            'teacher_id' => request()->get('teacher_id', ''),
            'course_id' => request()->get('course_id', ''),

        ]);

    return redirect()->route('load')->with('success', 'Sucessfully Registered!');

    }
}
