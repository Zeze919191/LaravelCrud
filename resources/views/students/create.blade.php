@extends('students.layout')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 

<div class="row">

  <div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2>Add Student Information</h2>
  </div>

  <div class="pull-right">

    <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
</div>
</div>
</div>
<body style="background-color:gainsboro;"> <center>
@if($errors->any())
<div class="alert alert-danger">
    <strong>Error!</strong> There were problems with your input<br><br>
    <ul>
@foreach($errors->all( ) as $error)
        <li>{{$error}}</li>
        @endforeach
</ul>
</div>
@endif
      
      <form action="{{ route('students.store') }}" class="post-form" method="POST">
       @csrf
       <div class="container">
</br>
<div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Student ID:</label>  
     <input type="text" name="sid" class="col-sm-4" >
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group row">
            
<label class="col-sm-2 col-form-label">Student Name:</label>  
    <input type="text" name="sname" class="col-sm-4" >
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group row">
            
<label class="col-sm-2 col-form-label">Student Email:</label>  
   <input type="email" name="semail" class="col-sm-4" >
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group row">
            
<label class="col-sm-2 col-form-label">Student Contact:</label>  
    <input type="tel" name="scontact" class="col-sm-4" >
    </div>
</div>


<label class="col-sm-1 col-form-label">
<div class="col-sm-4">  
    <button type="submit" class="btn btn-primary">Submit</button>
    
</div>
</label>

</div>
</div>
</div>
</form>
</center>
</body>
@endsection