@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Student Data</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('product.create')}}" class="btn btn-primary">Add</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>product</th>
    <th>type</th>
    <th>price</th>
    <th>status</th>


    
   </tr>
   @foreach($products as $row)
   <tr>
    <td>{{$row['product']}}</td>
    <td>{{$row['type']}}</td>
    <td>{{$row['price']}}</td>
    <td>{{$row['status']}}</td>

   
   </tr>
   @endforeach
  </table>
 </div>
</div>

@endsection