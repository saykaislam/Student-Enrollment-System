<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LLBController extends Controller
{
     public function llb() {
    	$llb_student_info=DB::table('student_tbl')
    	                ->where(['student_department'=>5])
    	                ->get();

    	$manage_student=view('admin.llb')
    	               ->with('llb_student_info',$llb_student_info);

    	return view('layout')
    	            ->with('llb',$manage_student);
    
    
    }
}
