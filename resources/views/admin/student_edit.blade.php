@extends('layout')
@section('content')

  <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Student</h2>

   <p  class="alert-success" >
    <?php
     $message=Session::get('message');
     if($message)
     {
      echo $message;
      Session::put('message',null);
     }
    ?>
  </p>
                          <form class="forms-sample" method="post" action="{{URL::to('/update_student',$student_description_profile->student_id)}}" >
                          	{{ csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" value="{{( $student_description_profile->student_name)}}">
                                 
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" value="{{( $student_description_profile->student_roll)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Father's Name</label>
                                  <input type="text" class="form-control p-input" name="student_father_name" value="{{( $student_description_profile->student_father_name)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Mother's Name</label>
                                  <input type="text" class="form-control p-input" name="student_mother_name"value="{{( $student_description_profile->student_mother_name)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" value="{{( $student_description_profile->student_email)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Phone Number</label>
                                  <input type="text" class="form-control p-input" name="student_phone" value="{{( $student_description_profile->student_phone)}}">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Student Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" value="{{( $student_description_profile->student_address)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" value="{{( $student_description_profile->student_password)}}">
                              </div>
                             
                             
                                  <div class="form-group">
                                  <label for="exampleInputPassword1">Admission Year</label>
                                  <input type="date" class="form-control p-input" name="student_admission_year" value="{{( $student_description_profile->student_admission_year)}}">
                              </div>
                             
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection