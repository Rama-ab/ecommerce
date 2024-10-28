@extends('index')
@section('title')
    create product
@endsection

@section('content')

<div class="container content-wrapper ">
    <form role="form" action="{{route('products.store')}}"  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">name:</label>
            <input type="text"  name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">price:</label>
            <input type="text"  name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
          </div>
         
            <div class="form-group">
              <label for="exampleInputEmail1">description:</label>
              <input type="text"  name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter description">
            </div>
              
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Image:</label>
              <div class="col-sm-10">
                  <input type="file" class="form-control" id="" name="image">
              </div>
          </div>
                       
             <div class="form-group">
             <label>category:</label>
              @foreach ($categories as $category)
              <div class="form-check">
                <input class="form-check-input"  type="checkbox" name="category_ids[]" value="{{$category->id}}"  id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  {{$category->name}}
                </label>
              </div>
              @endforeach
             </div>
        

        </div>
        <!-- /.card-body -->
    
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
        
</div>
@endsection