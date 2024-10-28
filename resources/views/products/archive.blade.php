@extends('index')


@section('title')
     archive
@endsection
@section('content')

<div class="container content-wrapper ">
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All products</h3>
        <div class="text-center">
          <button type="button" onclick="window.history.back();" class="btn btn-secondary">Back</button>
        </div>
       
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>name</th>
              <th>description</th>
              <th>price</th>
              <th>category</th>
              <th>image</th>
              <th>restore</th>
              <th>forec Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $key=>$product)
            <tr>
              <td>{{$key}}</td>
              <td>{{$product->name}}</td>
              <td>{{$product->description}}</td>
              <td>{{$product->price}}</td>
              <td>
              @foreach($product->categories as $category)
              <div>{{$category->name}} </div>  
              @endforeach
              </td>
              <td><img  width = "50" src='{{asset("productImage/{$product->image}")}}' alt=""></td>

              
             
         
        
       
            <td>
              <a href="{{route('products.restore' , $product->id)}}" class="btn btn-primary">Restore</a>
            </td>
         
          
          <td>
            <form action="{{route('products.forceDelete' , $product->id)}}" method="POST" >
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">force Delete</button>
          </form>
          </td>
        </tr>
           @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

    @php

    @endphp
@endsection