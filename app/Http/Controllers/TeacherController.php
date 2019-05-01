<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class TeacherController extends Controller
{
     public function allteacher() {
    	$allteachers_info=DB::table('teachers_tbl')
    	                ->get();

    	$manage_teachers=view('admin.allteacher')
    	               ->with('allteachers_info',$allteachers_info);

    	return view('layout')
    	            ->with('allteacher',$manage_teachers);
    }

      
      public function addteacher() {

    	return view('admin.addteacher');


    }


public function save_teacher(Request $request) {
    	$data=array();
    	$data['teachers_name']=$request->teachers_name;
    	$data['teachers_email']=$request->teachers_email;
    	$data['teachers_phone']=$request->teachers_phone;
    	$data['teachers_address']=$request->teachers_address;
    	$data['teachers_department']=$request->teachers_department;
    	$image=$request->file('teachers_image');

    	if ($image) {
    		$image_name=str_random(20);
    		$ext=strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$upload_path='image/';
    		$image_url=$upload_path.$image_full_name;
    		$success=$image->move($upload_path,$image_full_name);

    		if ($success) {
    			$data['teachers_image']=$image_url;

    			DB::table('teachers_tbl')->insert($data);
    			Session::put('message','Teacher Added Successfully!!');
    			return Redirect::to('/allteacher');
    		}



    	}

    	$data['image']=$image_url;
    	DB::table('teachers_tbl')->insert($data);
    	Session::put('message','Teacher Added Successfully!!');
    			return Redirect::to('/allteacher');


    	DB::table('teachers_tbl')->insert($data);
    	Session::put('message','Student Added Successfully!!');
    			return Redirect::to('/allteacher');



    }

    //Teacher Delete function is here
     public function teachersdelete($teachers_id) {

    	   DB::table('teachers_tbl')
    	             ->where('teachers_id',$teachers_id)
    	             ->delete();

    	   return Redirect::to('/allteacher');

}

}
