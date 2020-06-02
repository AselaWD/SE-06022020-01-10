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
   <a href="{{route('student.create')}}" class="btn btn-primary">Add</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>name</th>
    <th>email</th>
    <th>address</th>

    <th>Edit</th>
    
   </tr>
   @foreach($students as $row)
   <tr>
    <td>{{$row['name']}}</td>
    <td>{{$row['email']}}</td>
    <td>{{$row['address']}}</td>

    <td><a href="{{action('StudentController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
    <td></td>
   </tr>
   @endforeach
  </table>
 </div>
</div>

@endsection