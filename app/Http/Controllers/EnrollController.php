<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoadRequest;
use App\Models\Enroll;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    public function index()
    {
        $enrolls = Enroll::all();
        return view('enroll', ['enrolls' => $enrolls]);
    }

    public function show($id)
    {
        $enrolls = Enroll::findOrFail($id);
        $students = Student::all(); // Retrieve all teachers
        $courses = Course::all();
        return view('/edit', ['load' => $load, 'students' => $students, 'courses' => $courses]);
    }

    public function update(loadRequest $request, $id){
        $validated = $request->validated();
        $info = Load::findorfail($id);
        $info->update($validated);

        $request->session()->regenerate();
        return redirect('/load')->with('success', "Successfully Edited");
    }
}