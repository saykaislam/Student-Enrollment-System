<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class AllstudentsController extends Controller
{

  //All Student Function is here
    public function allstudent(){
    	$allstudent_info=DB::table('student_tbl')
    	                ->get();

    	$manage_student=view('admin.allstudent')
    	               ->with('allstudent_info',$allstudent_info);

    	return view('layout')
    	            ->with('allstudent',$manage_student);
    }

    //Student delete function is here

        public function studentdelete($student_id) {
        $img=DB::table('student_tbl')->where('student_id',$student_id)->first();
        $image_path=$img->student_image;
        $done=unlink($image_path);

    	   $delete=DB::table('student_tbl')
    	             ->where('student_id',$student_id)
    	             ->delete();
         if ($delete) {
              $notification=array(
                'messege'=>'News Deleted Successfully!!','alert-type'=>'success'
                );
            return Redirect::to('/allstudent')->with($notification);
            }else {
                return Redirect()->back();
            }

    	   // return Redirect::to('/allstudent');

}

   // Student View Function is here
   public function student_view($student_id) {

    $student_description_view=DB::table('student_tbl')
                           ->select('*')
                           ->where('student_id',$student_id)
                           ->first();

    $manage_description_student=view('admin.student_view')
                          ->with('student_description_view',$student_description_view);

    return view('layout')
              ->with('student_view',$manage_description_student);
           

}

//Student Edit function is here
   public function student_edit($student_id) {

             $student_description_profile=DB::table('student_tbl')
                           ->select('*')
                           ->where('student_id',$student_id)
                           ->first();

    $manage_description_student=view('admin.student_edit')
                          ->with('student_description_profile',$student_description_profile);

    return view('layout')
              ->with('student_edit',$manage_description_student);
}

//Student Update function is here
    public function update_student(Request $request,$student_id) {

        $data=array();
        $data['student_name']=$request->student_name;
        $data['student_roll']=$request->student_roll;
        $data['student_father_name']=$request->student_father_name;
        $data['student_mother_name']=$request->student_mother_name;
        $data['student_email']=$request->student_email;
        $data['student_phone']=$request->student_phone;
        $data['student_address']=$request->student_address;
        $data['student_password']=md5($request->student_password);
        $data['student_admission_year']=$request->student_admission_year;

        
        DB::table('student_tbl')
              ->where('student_id',$student_id)
              ->update($data);

        Session::put('message','Student Updated Successfully!!');
                return Redirect::to('/allstudent');


    }




}
