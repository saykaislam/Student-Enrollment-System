<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class ViewController extends Controller
{
     public function view() {
    	return view('admin.view');
    }


    public function student_profile() {
      	$student_id=Session::get('student_id');

    $student_profile=DB::table('student_tbl')
                           ->select('*')
                           ->where('student_id',$student_id)
                           ->first();

    $manage_student=view('student.student_profile')
                          ->with('student_profile',$student_profile);

    return view('student_layout')
              ->with('student_profile',$manage_student);
           

}
}
