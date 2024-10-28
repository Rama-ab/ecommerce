@extends('index')


@section('title')
     Category
@endsection
@section('content')

<div class="container content-wrapper ">
<div class="col-12"> 
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All Category </h3>
      
       
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>category name</th>
              <th>Show</th>
              <th>Edit</th>
              <th>Delete</th>
           
          
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $key=>$category)
            <tr>
              <td>{{$key}}</td>
              <td>{{$category->name}}</td>
              <td><a href="{{route('categories.show' , $category->id)}}" class="btn btn-primary">show</a></td>

              <td>
                <a href="{{route('categories.edit' , $category->id)}}" class="btn btn-warning">Edit</a>
              </td>
             
              <td>
                <form action="{{route('categories.destroy' , $category->id)}}" method="POST" >
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
              </form>
              </td>


             
            </tr>
           @endforeach
          </tbody>
        </table>
        @php
       
        @endphp
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

    
@endsection