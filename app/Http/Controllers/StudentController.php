<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        $hcd_students = [
            [
            'id' => 1001,
            'fname' => 'Cyril Jennica',
            'lname' => 'Iway',
            'address' => 'Tiptip',
            'birthdate' => '2001-01-02',
            'city' => 'Tagbilaran City',
            'province' => 'Bohol',
        ]];
        return view('student', [
            'students' => Student::all(),
            'hd_students' => $hcd_students
        ]);
    }

    public function show($id)
    {
        $student = Student::findorfail($id);
        return view('/editStudent', compact('student'));
    }

    public function cover(StudentRequest $request, $id){  //mura ranig Request $request pero instead of default naa nay gihatag unsay naas request which is makit.an ras StudentRequest specifically

        $validated = $request->validated();
        $info = Student::findorfail($id);
        $info->update($validated);
        $request->session()->regenerate();
        return redirect('/student')->with('success', "Successfully Edited");
    }

}

