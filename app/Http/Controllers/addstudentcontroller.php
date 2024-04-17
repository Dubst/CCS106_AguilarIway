<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class addstudentcontroller extends Controller
{
    public function index(){
        $student = students::create([
            'fname' => request()->get('fname', ''),
            'lname' => request()->get('lname', ''),
            'address' => request()->get('address', ''),
            'birthdate' => request()->get('bdate', ''),
            'city' => request()->get('city', ''),
            'province' => request()->get('province', ''),
        ]);

    return redirect()->route('student')->with('success', 'Sucessfully Registered!');

    }
}


