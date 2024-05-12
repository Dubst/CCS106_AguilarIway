<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){

        return view('course', [
            'courses' => Course::all()
        ]);

    }

    public function show($id)
    {
        $courses = Course::findorfail($id);
        return view('/editcourse', ['courses' => $courses]);
    }

    public function update(CourseRequest $request, $id){
        $validated = $request->validated();
        $info = Course::findorfail($id);
        $info->update($validated);

        $request->session()->regenerate();
        return redirect('/course')->with('success', "Successfully Edited");
    }
}
