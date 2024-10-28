@extends('index')


@section('title')
     Orders
@endsection
@section('content')

<div class="container content-wrapper ">
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All orders</h3>
     
       
      </div>
      <!-- /.card-header -->
      @if(session('success'))
      <div class="alert alert-success ">
             {{session('success')}}
      </div>
@endif
<!--to filtering orders by customer name  -->
      <form action="{{route('orders.index')}}" class="form-horizontal tasi-form">
        @csrf
  
        <div class="row">
        <div class="form-group col-md-6">
          <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Customer</label>
          <div class="col-lg-10">             
          <select class="form-control js-example-basic-single" name="user_id">
            <option value="" selected> all customer</option>
            @foreach($users as $user)
            <option value="{{$user->id}}" @if(app('request')->input('user_id')== $user->id) selected @endif>{{$user->name}}</option>
            @endforeach
          </select>       
          </div>
      </div>  
    </div>

    <!--to filtering orders by order status  -->

    <div class="row">
      <div class="form-group col-md-6">
           <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">State</label>
           <div class="col-lg-10">               
           <select class="form-control js-example-basic-single" name="state">
             <option value="" selected> all status </option>
             <option value="pending" @if(app('request')->input('status')=='pending') selected @endif>pending</option>
             <option value="completed" @if(app('request')->input('status')=='completed') selected @endif>completed</option>
             <option value="canceled" @if(app('request')->input('status')=='canceled') selected @endif>canceled</option>                                    
           </select>
            
        </div>
     </div>
  </div>
  <div class="form-actions center">                                       
    <button type="submit" class="btn btn-primary m-2">
        <i class="icon-android-search"></i> search
    </button>
</div> 
    </form>
 <!--show the message when there no orders related to the customer -->

    @if($message)
    <div class="m-5">
      {{$message}}
    </div>
    @else

      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>product </th>
              <th>desc</th>
              <th>price</th>
              <th>user</th>
              <th>status</th>
              <th>Change status</th>
              <th>show</th>
              <th>Delete</th>


            </tr>
          </thead>
          <tbody>
            @foreach($orders as $key=>$order)
            <tr>
              <td>{{$key}}</td>
              <td>{{$order->product->name}}</td>
              <td>{{$order->product->description}}</td>
              <td>{{$order->product->price}}</td>
              <td>{{$order->user->name}}</td>
              <td>{{$order->status}}</td>
              <td>
                <form action="{{route('orders.updateStatus', $order->id)}}" method="POST">
                  @csrf
                  @method('POST')
                  <SELECT name="status" onchange="this.form.submit()">
                    <option value="pending" {{$order->status=='pending'?'selected':""}}> pending</option>
                    <option value="completed" {{$order->status=='completed'?'selected':""}}> completed</option>
                    <option value="canceled" {{$order->status=='canceled'?'selected':""}}> canceled</option>
                  </SELECT>
                </form>
              </td>
              
            
              <td>
                <a href="{{route('orders.show' , $order->id)}}" class="btn btn-primary">Show</a>
              </td> 

              <td>
                <form action="{{route('orders.destroy' , $order->id)}}" method="post" >
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
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
@endif
@endsection