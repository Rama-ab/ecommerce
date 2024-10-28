@extends('index')


@section('title')
     products
@endsection
@section('content')

<div class="container content-wrapper ">
<div class="col-12">
    
   
<div class="card">
    <div class="card-body"> 
         <div class="container mt-5">
    <div class="row justify-content-center ">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                  
                  
                        <div class="mb-3 row">
                            <label for="title" class="col-sm-2 col-form-label">name</label>
                            <div class="col-sm-10">
                                <p>{{$product->name}}</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="author" class="col-sm-2 col-form-label">price</label>
                            <div class="col-sm-10">
                                <p>{{$product->price}}</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="content" class="col-sm-2 col-form-label">description</label>
                            <div class="col-sm-10">
                                <p>{{$product->description}}</p>
                            </div>
                        </div>
                      
                       
                        <div class="mb-3 row">
                            <label for="content" class="col-sm-2 col-form-label">keys:</label>
                            <div class="col-sm-10">
                                <p> @foreach($product->categories as $category)
                                    <p>{{$category->name}}</p>
                                    @endforeach
                                </p>
                            </div>
                        </div>

                        <div class="mb-3 row">
                        <img  width = "200" height="200" src='{{asset("productImage/{$product->image}")}}' alt="">
                        </div>




                       
                        <div class="text-center">
                        
                            <button type="button" onclick="window.history.back();" class="btn btn-secondary">Cancel</button>
                        </div>

                      
                    </form>

                </div>
            </div>
        
        </div>         

@endsection