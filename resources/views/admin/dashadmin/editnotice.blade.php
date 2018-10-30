@extends('layouts.app');

@section('content')
<div class="container">
<form method='post' action="{{url('admin/dashadmin/notice/'.$category->id)}}">
{{method_field('PUT')}}
{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Notice Subject</label>
    <input type="text" class="form-control" name="inputcategory1" value="{{$category->Notice_subject}}" >
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Notice Date</label>
    <input type="text" class="form-control" name="inputcategory2" value="{{$category->Notice_date}}" >
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Notice</label>
    <div class="col-sm-10">
					<textarea id="editor1" class="form-control" name="inputcategory3" >{{$category->Notice}}</textarea>
                    </div>
   
  </div>
  
  <INPUT TYPE="submit" CLASS="btn btn-outline btn-default" VALUE="Save">
</form>
</div>







@endsection