<?php

namespace App\Http\Controllers;

use App\Models\students;
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
            'students' => students::all(),
            'hd_students' => $hcd_students
        ]);
    }
}

