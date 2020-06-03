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
    <th>type
    <form method="post" class="delete_form" action="{{url('type')}}">
      {{csrf_field()}}
      
      <button type="submit" class="btn btn-danger">Desc</button>
     </form>
     
     <form method="post" class="delete_form" action="{{url('/asc/price')}}">
      {{csrf_field()}}
      
      <button type="submit" class="btn btn-danger">Asc</button>
     </form>
     </td>
    
    </th>
    <th>price
    
    <form method="post" class="delete_form" action="{{url('price')}}">
      {{csrf_field()}}
      
      <button type="submit" class="btn btn-danger">Desc</button>
     </form>
     <form method="post" class="delete_form" action="{{url('/asc/type')}}">
      {{csrf_field()}}
      
      <button type="submit" class="btn btn-danger">Asc</button>
     </form>
    </th>
    <th>status</th>


    
   </tr>
   @foreach($products as $row)
   <tr>
    <td>{{$row['product']}}</td>
    <td>{{$row['type']}}     
    <td>{{$row['price']}}    </td>
    <td>{{$row['status']}}</td>

   
   </tr>
   @endforeach
  </table>
 </div>
</div>

@endsection