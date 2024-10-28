@extends('index')


@section('title')
     Users
@endsection
@section('content')

<div class="container content-wrapper ">
<div class="col-12"> 
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All users </h3>
      
       
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>name</th>
              <th>email</th>
              <th>Admin</th>
       
            </tr>
          </thead>
          <tbody>
            @foreach($users as $key=>$user)
            <tr>
              <td>{{$key}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td class="admin-btn" data-route=''>@if($user->is_admin) yes @else no @endif</td>

         
                 
                 

           

             
            </tr>
           @endforeach
          </tbody>
        </table>
        @php
       
        @endphp
      </div>
    
    </div>
 
  </div>
</div>

    
@endsection
