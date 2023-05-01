@extends('students.layout')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 

<head>

<h2 style="text-align:center"> Student Information </h2>
</head>
<style>
    table {
        border: 8px outset;
        border-radius: 10px;
        border-spacing: 10px;
        padding: 20px;
        margin-left: auto;
        margin-right: auto;
    }

    th,
    td {
        padding: 5px;
        border: 1px solid;
    }
    </style>

<div class="row">
    <div class="col-lg-12 margin-tb">

<div class="pull-right">

</div>
</div>
</div>
<body style="background-color:gainsboro;">
@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>

@endif
<center>
<table class="table table-dark table-striped">
<thead class="thead-dark"> 
    <tr>
    <th> No.</th>
    <th>Student ID</th>
    <th>Student Name</th>
    <th>Student Email</th>
    <th>Student Contact</th>
    <th width="280px">Action</th>
</tr>
</thread>
@foreach($students as $student)
 <tr>
    <td>{{++$i}}</td>
    
    <td>{{$student->sid}}</td>
    <td>{{$student->sname}}</td>
    <td>{{$student->semail}}</td>
    <td>{{$student->scontact}}</td>
    <td><center>
        <form action="{{route('students.destroy',$student->id)}}"method="POST">

   
    <a class="btn btn-success" href="{{route('students.edit',$student->id) }}">Edit</a>

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>

</form>
</td>
</tr>
@endforeach
</table>
<a class="btn btn-primary" href="{{route('students.create') }}"> Add new Record</a>
</body>
@endsection