@extends('layout')

@php

function convert_department($value) {
	$values=[

		 1=>'CSE',
		 2=>'EEE',
		 3=>'CEN',
		 4=>'BBA',
		 5=>'LLB',

	];
	return $values[$value];

}

@endphp


@section('content')

          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-6">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($student_description_view->student_image)}}" alt="">
                  <p class="name">{{$student_description_view->student_name}}</p>
                  <p class="designation">{{$student_description_view->student_roll}}</p>
                  <a class="email" href="#">{{$student_description_view->student_email}}</a>
                  <a class="number" href="#">{{$student_description_view->student_phone}}</a>
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">
                  <ul class="achivements">
                    <h2 style="color: green; font-family: cursive; font-weight: bolder;">Stamford University Bangladesh</h2>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>The total information of this student is given below:</p>
                  </div>
                  <div class="info-links">
                    <a class="website" >
                      <i class="icon-globe icon">Father's Name:</i>
                      <span style="font-family: vernada; font-size: 15px;">{{$student_description_view->student_father_name}}</span>
                    </a>
                     <a class="website" >
                      <i class="icon-globe icon">Mother's Name:</i>
                      <span style="font-family: vernada; font-size: 15px;">{{$student_description_view->student_mother_name}}</span>
                    </a>
                      <a class="website" >
                      <i class="icon-globe icon">Address:</i>
                      <span style="font-family: vernada; font-size: 15px;">{{$student_description_view->student_address}}</span>
                    </a>
                    <a class="website" >
                      <i class="icon-globe icon">Department:</i>
                      <span style="font-family: vernada; font-size: 15px;">{{convert_department($student_description_view->student_department)}}</span>
                    </a>
                    <a class="website" >
                      <i class="icon-globe icon">Admission Date:</i>
                      <span style="font-family: vernada; font-size: 15px;">{{$student_description_view->student_admission_year}}</span>
                    </a>
                    
                  </div>
                </div>
              </div>
            </div>
           
          </div>
       

@endsection