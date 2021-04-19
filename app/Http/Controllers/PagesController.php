<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class PagesController extends Controller
{
    //
    function student(){
        return view('pages.student');
    }
    function addMarks(Request $request){
        //Validate user request
        $request->validate([
            'sid' => 'required',
            'course' => 'required',
            'marks' => 'required'
        ]);
    //insert data to database
        $student = new student;
        $student->sid = $request->sid;
        $student->course =$request->course;
        $student->marks = $request->marks;
        $save=$student->save();
        if($save){
            return back()->with('Success','New User has been successfuly added');
        }else{
            return back()->with('fail','Something went wrong try again');
        }




    }
}
