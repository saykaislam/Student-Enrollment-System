<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('student_login');
});


Route::get('/backend', function () {
    return view('admin.admin_login');
});

//admin login...
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');

//student login..
Route::post('/studentlogin','StudentController@student_login');
Route::get('/student_dashboard','StudentController@student_dashboard');


//Admin logout...
Route::get('/logout','logoutController@logout');

//Student logout...
Route::get('/student_logout','logoutController@student_logout');

//AddStudent Route...
Route::get('/addstudent','AddstudentController@addstudent');
Route::post('/save_student','AddstudentController@save_student');

//Delete Student Route...
Route::get('/student_delete/{student_id}','AllstudentsController@studentdelete');

//Student View route
Route::get('/student_view/{student_id}','AllstudentsController@student_view');

//Student Edit Route...
Route::get('/student_edit/{student_id}','AllstudentsController@student_edit');

//Admin Student Update
Route::post('/update_student/{student_id}','AllstudentsController@update_student');

//Student Update Profile Route..
Route::post('/student_update','SettingsController@update_profile');

//AllStudent Route...
Route::get('/allstudent','AllstudentsController@allstudent');

//Tutionfee Route..
Route::get('/tutionfee','TutionController@tutionfee');

//CSE Route...
Route::get('/cse','CSEController@cse');

//EEE Route...
Route::get('/eee','EEEController@eee');

//CEN Route...
Route::get('/cen','CENController@cen');

//BBA Route...
Route::get('/bba','BBAController@bba');

//LLB Route...
Route::get('/llb','LLBController@llb');

//All teachers Route..
Route::get('/allteacher','TeacherController@allteacher');

//Add teachers Route...
Route::get('/addteacher','TeacherController@addteacher');
Route::post('/save_teacher','TeacherController@save_teacher');

//Teacher Delete Route...
Route::get('/teachers_delete/{teachers_id}','TeacherController@teachersdelete');



//Admin View profile Route..
Route::get('/view','ViewController@view');

//Admin Settings Route...
Route::get('/settings','SettingsController@settings');

//Student Settings Route..
Route::get('/student_settings','SettingsController@student_settings');

//Student profile view Route...
Route::get('/student_profile','ViewController@student_profile');




