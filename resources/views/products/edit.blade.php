@extends('index')
@section('title')
    edit product
@endsection

@section('content')

<div class="container content-wrapper ">
    <form role="form" action="{{route('products.update' , $product->id)}}"  method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">name:</label>
            <input type="text"  name="name" value="{{$product->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">price:</label>
            <input type="text"  name="price"  value="{{$product->price}}" class="form-control" id="exampleInputEmail1" placeholder="Enter description">
          </div>
         
            <div class="form-group">
              <label for="exampleInputEmail1">description:</label>
              <input type="text"  name="description"  value="{{$product->description}}" class="form-control" id="exampleInputEmail1" placeholder="Enter description">
            </div>

          

              
             <div class="form-group">
             <label>category:</label>
              @foreach ($categories as $category)
              <div class="form-check">
                <input class="form-check-input"  type="checkbox" name="category_ids[]" id="flexCheckDefault" value={{$category->id}}  {{in_array($category->id,$product->categories->pluck('id')->toArray())? 'checked':''}}>
                <label class="form-check-label" for="flexCheckDefault">
                  {{$category->name}}
                </label>
              </div>
              @endforeach
             </div>

             <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Image:</label>
              <div class="col-sm-10">
                  <input type="file" class="form-control mb-5" id="" name="image">
                  <img  width = "250" height="200" src='{{asset("productImage/{$product->image}")}}' alt="">
              </div>
          </div>

            
        <!-- /.card-body -->
      
     
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
        
</div>
@endsection