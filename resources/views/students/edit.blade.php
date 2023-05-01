@extends('students.layout')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="row">
    <div class="col-lg-12 margin-tb">
       
        <div class="pull-left">
          
                <h2>Edit Record</h2>
</div>

<div class="pull-right">
    
    <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
</div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong> Error!</strong> There were problems with your input<br><br>
    <ul>

    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach

</ul>
</div>

@endif
<body style="background-color:gainsboro;"> <center>

<form class="post-form" action="{{route('students.update',$student->id) }}" method="POST">

@csrf
@method('PUT')

<div class="container">

<div class="col-xs12 col-sm-12 col-md-12">
    <div class="form-group row">

    <label class="col-sm-2 col-form-label">Student ID:</label>  

    <input  type="text" name="sid" value="{{$student->sid}}" class="col-sm-4">

</div>
</div>
 
<div class="col-xs12 col-sm-12 col-md-12">
<div class="form-group row">

    <label class="col-sm-2 col-form-label">Student Name:</label>  
   <input type="text" name="sname" value="{{$student->sname}}" class="col-sm-4" >
</div>
</div>
    
<div class="col-xs12 col-sm-12 col-md-12">
<div class="form-group row">

    <label class="col-sm-2 col-form-label">Student Email:</label>  
    <input type="email" name="semail" value="{{$student->semail}}" class="col-sm-4" >
</div>
</div>

<div class="col-xs12 col-sm-12 col-md-12">
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Student Contact:</label>  
    <input type="tel" name="scontact" value="{{$student->scontact}}" class="col-sm-4">
</div>
</div>

<label class="col-sm-1 col-form-label">
<div class="col-sm-4">  
    <button type="submit" class="btn btn-success">Submit</button>
    
</div>
</label>
</div>
</div>

</form>
</center>
</body>
@endsection