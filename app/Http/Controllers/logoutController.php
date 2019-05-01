<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class logoutController extends Controller
{
    public function logout() {
    	Session::put('admin_name',null);
    	Session::put('admin_id',null);
    	return Redirect::to('/backend');
    }

    public function student_logout() {

    	Session::put('student_name',null);
    	Session::put('student_id',null);
    	return Redirect::to('/');
    }
}
