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
                <h5 class="card-title text-center"> Category:</h5>
                <div class="card-body">
                        <div class="mb-3 row">
                            <label  class="col-sm-2 ">name:</label>
                            <div class="col-sm-2">
                                <p>{{$category->name}}</p>
                            </div>
                        </div>
                        
                       
                        
                        <div class="text-center">
                           
                            <button type="button" onclick="window.history.back();" class="btn btn-secondary">Back</button>
                        </div>

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