@extends('index')


@section('title')
     products
@endsection
@section('content')

<div class="container content-wrapper ">
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All products</h3>
        <div class="text-center">
          <a  href="{{route('products.archive') }}"><button class="btn btn-primary">Archive product</button></a>
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
              <th>Edit</th>
              <th>show</th>
              <th>Archive</th>
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

              <td><img  width = "50" src='{{asset("productImage/{$product->image}")}}' alt=""></td>




              </td>
              
              <td>
                <a href="{{route('products.edit' , $product->id)}}" class="btn btn-primary">Edit</a>
              </td>

               
              <td>
                <a href="{{route('products.show' , $product->id)}}" class="btn btn-primary">Show</a>
              </td>
         
          <td>
             
            <form action="{{route('products.destroy' , $product->id)}}" method="POST" >
                @csrf
                @method('DELETE')
                <button class="btn btn-warning" type="submit" >Delete</button>
            </form>
          </td>
          
      
         
        
          
          <td>
            <form action="{{route('products.forceDelete' , $product->id)}}" method="post" >
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure ,there are orders related to this product will be deleted')">force Delete</button>
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