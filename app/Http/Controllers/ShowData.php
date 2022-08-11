<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
class ShowData extends Controller
{
    public function show(){
        $teacher=Teacher::all();
        return view('teacherData', compact('teacher'));
    }

    public function update($id){
        $teacher=Teacher::find($id);
        return view('update',compact('teacher'));
    }

    public function handleUpdate(Request $request){
        // $teacher=Teacher::find();
        dd($request);
        // $teacher->name=$request->input('name');
        // $teacher->email = $request->input('email');
        // $teacher->update();
        // echo 'update success';
    }
}
