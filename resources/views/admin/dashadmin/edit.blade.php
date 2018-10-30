@extends('layouts.app');

@section('content')
<div class="container">
<form method='post' action="{{url('admin/dashadmin/category/'.$category->id)}}">
{{method_field('PUT')}}
{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" class="form-control" name="inputcategory1" value="{{$category->category_name}}" >
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Subject Name</label>
    <input type="text" class="form-control" name="inputcategory2" value="{{$category->subject_name}}" >
   
  </div>
  
  
  <INPUT TYPE="submit" CLASS="btn btn-outline btn-default" VALUE="Save">
</form>
</div>







@endsection