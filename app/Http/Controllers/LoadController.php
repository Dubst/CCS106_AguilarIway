<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoadRequest;
use App\Models\Load;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class LoadController extends Controller
{
    public function index()
    {
        $loads = Load::all();
        return view('load', ['loads' => $loads]);
    }

    public function show($id)
    {
        $load = Load::findOrFail($id);
        $teachers = Teacher::all(); // Retrieve all teachers
        $courses = Course::all();
        return view('/editload', ['load' => $load, 'teachers' => $teachers, 'courses' => $courses]);
    }

    public function update(loadRequest $request, $id){
        $validated = $request->validated();
        $info = Load::findorfail($id);
        $info->update($validated);

        $request->session()->regenerate();
        return redirect('/load')->with('success', "Successfully Edited");
    }
}