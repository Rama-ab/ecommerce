@extends('..master')

@section('title')
create
@endsection

@section('css')

<div class="container">

    
</div>

@endsection

@section('content')

<div class="row p-5 m-5">
    <div class="col-lg-12 mt-5">
        <section class="panel">
            <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">edit an Category</h5>
                    <form action="{{route('categories.update' , $category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 row">
                            <label for="title" class="col-sm-2 col-form-label">name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{$category->name}}" id="title" name="name">
                            </div>
                        </div>
                        
                       
                        
                        <div class="text-center">
                            <button type="submit" class="main-button">Save</button>
                            <button type="button" onclick="window.history.back();" class="main-button">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
        </section>
    </div>

</div>
@endsection

@section('scripts')

@endsection