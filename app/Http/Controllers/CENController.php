<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CENController extends Controller
{
     public function cen() {
    	$cen_student_info=DB::table('student_tbl')
    	                ->where(['student_department'=>3])
    	                ->get();

    	$manage_student=view('admin.cen')
    	               ->with('cen_student_info',$cen_student_info);

    	return view('layout')
    	            ->with('cen',$manage_student);
    
    }
}
