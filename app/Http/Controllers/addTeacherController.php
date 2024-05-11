<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class addTeacherController extends Controller
{
    public function index(){
        $teacher = Teacher::create([
            'fname' => request()->get('fname', ''),
            'lname' => request()->get('lname', ''),
            'address' => request()->get('address', ''),
            'birthdate' => request()->get('bdate', ''),
            'city' => request()->get('city', ''),
            'province' => request()->get('province', ''),
        ]);

    return redirect()->route('teacher')->with('success', 'Sucessfully Registered!');

    }
}
