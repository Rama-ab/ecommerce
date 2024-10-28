@extends('..master')
@section('content')
<div class="row p-5 m-5">
    <div class="col-lg-12 mt-5">
        <section class="panel">
            <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <h5 class="card-title text-center">Create an Category</h5>
                <div class="card-body">
                    <form action="{{route('categories.store')}}" method="POST" >
                        @csrf
                        <div class="mb-3 row">
                            <label for="title" class="col-sm-2 col-form-label">name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="name">
                            </div>
                        </div>
                        
                       
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-secondary">Save</button>
                            <button type="button" onclick="window.history.back();" class="btn btn-secondary">Cancel</button>
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