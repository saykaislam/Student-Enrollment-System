<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class StudentController extends Controller
{
     public function student_login(Request $request)  {
 
      $email= $request->student_email;
      $password= md5($request->student_password);
      $result= DB::table('student_tbl')
             ->where('student_email',$email)
             ->where('student_password',$password)
             ->first();

      

            if ($result) {
            	Session::put('student_email',$result->student_email);
            	Session::put('student_id',$result->student_id);
            	return Redirect::to('/student_dashboard');
            }   
            else {

            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/');  
            } 

  }

  public function student_dashboard() {
  	return view('student.dashboard');
  }




}
