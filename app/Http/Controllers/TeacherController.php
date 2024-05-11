<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){

        return view('teacher', [
            'teachers' => Teacher::all()
        ]);

    }

    public function show($id)
    {
        $teachers = Teacher::findorfail($id);
        return view('/editteacher', ['teachers' => $teachers]);
    }

    public function update(TeacherRequest $request, $id){
        $validated = $request->validated();
        $info = Teacher::findorfail($id);
        $info->update($validated);

        $request->session()->regenerate();
        return redirect('/teacher')->with('success', "Successfully Edited");
    }
}
