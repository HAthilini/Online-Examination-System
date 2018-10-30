@extends('layouts.app');

@section('content')
<div class="container" action="{{url('admin/dashadmin/student/')}}">
<form action="{{url('student')}}">
{{method_field('PUT')}}
{{csrf_field()}}
<div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Category Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="inputstudent1"  value="{{$student->Category_name}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Student Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="inputstudent2"  value="{{$student->student_name}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Registration Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="inputstudent3" value="{{ $student->Reg_number}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Date of Birth</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="inputstudent4" value="{{$student->Date_of_Birth}}" >
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="inputstudent5" value="{{$student->Address}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="inputstudent6" value="{{ $student->E_Mail}}" >
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="inputstudent7" value="{{ $student->Password}}" >
    </div>
  </div>
  
  <INPUT TYPE="submit" CLASS="btn btn-outline btn-default" VALUE="Back">
</form>
</div>
@endsection
