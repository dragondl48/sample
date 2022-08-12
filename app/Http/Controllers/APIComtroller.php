<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;

class APIComtroller extends Controller
{
    public function getData(){
        $teacher=Teacher::all();
        return view('teacherData', compact('teacher'));
    }
    // public function show(){
    //     $teacher=Teacher::all();
    //     return view('teacherData', compact('teacher'));
    // }
}
