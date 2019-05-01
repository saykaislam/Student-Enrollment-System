@extends('layout')
@section('content')


 
          <div class="card">
            <div class="card-body">
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
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          
                          <th>Teacher Name</th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Department</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($allteachers_info as $v_teachers)
                      <tr>
                          
                          <td>{{$v_teachers->teachers_name}}</td>
                          <td>{{$v_teachers->teachers_phone}}</td>
                          <td><img src="{{URL::to($v_teachers->teachers_image)}}" height="80" width="100" style="border-radius: 50%; "></td>
                          <td>{{$v_teachers->teachers_address}}</td>
                          <td>
                            @if ($v_teachers->teachers_department==1)
                            <span class="label label-success">{{'CSE'}}</span>
                            @elseif ($v_teachers->teachers_department==2)
                            <span class="label label-primary">{{'EEE'}}</span>
                             @elseif ($v_teachers->teachers_department==3)
                            <span class="label label-warning">{{'CEN'}}</span>
                             @elseif ($v_teachers->teachers_department==4)
                            <span class="label label-info">{{'BBA'}}</span>
                             @elseif ($v_teachers->teachers_department==5)
                            <span class="label label-default">{{'LLB'}}</span>

                            @else
                             <span class="label label-important">{{'Not defined'}}</span>
                             @endif
                          </td>
                          
                          <td>
                          
                       
                            <a href="{{URl::to('/teachers_delete/'.$v_teachers->teachers_id)}}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>

                          </td>
                      </tr>
                     
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
       

@endsection