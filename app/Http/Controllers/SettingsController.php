<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class SettingsController extends Controller
{
	//Admin Setting function is here
    public function settings() {
    	return view('admin.settings');
    }
    //Student Setting function is here
     public function student_settings() {
     	$student_id=Session::get('student_id');
    	 $student_description_profile=DB::table('student_tbl')
                           ->select('*')
                           ->where('student_id',$student_id)
                           ->first();

    $manage_description_student=view('student.student_settings')
                          ->with('student_description_profile',$student_description_profile);

    return view('student_layout')
              ->with('student_settings',$manage_description_student);
    }

    public function update_profile(Request $request) {
    	$student_id=Session::get('student_id');
    	 $data=array();
       
        $data['student_phone']=$request->student_phone;
        $data['student_address']=$request->student_address;
        $data['student_password']=md5($request->student_password);
      

        
        DB::table('student_tbl')
              ->where('student_id',$student_id)
              ->update($data);

        Session::put('message','Student Updated Successfully!!');
                return Redirect::to('/student_profile');

    }
}
