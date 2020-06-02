@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add Data</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="post" action="{{url('product')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="product" class="form-control" placeholder="Enter name" />
   </div>
   <div class="form-group">
    <input type="text" name="type" class="form-control" placeholder="Enter type" />
   </div>
   <div class="form-group">
    <input type="text" name="price" class="form-control" placeholder="price" />
   </div>
   
   <div class="form-group">
    <input type="text" name="status" class="form-control" placeholder="status" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection