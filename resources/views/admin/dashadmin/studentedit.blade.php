@extends('layouts.app');

@section('content')
<div class="container">
<form method='post' action="{{url('admin/dashadmin/student/'.$student->id)}}">
{{method_field('PUT')}}
{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" class="form-control" name="inputcategory1" value="{{$student->Category_name}}" >
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Student Name</label>
    <input type="text" class="form-control" name="inputcategory2" value="{{$student->student_name}}" >
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Registration Number</label>
    <input type="text" class="form-control" name="inputcategory3" value="{{ $student->Reg_number}}" >
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date Of Birth</label>
    <input type="text" class="form-control" name="inputcategory4" value="{{$student->Date_of_Birth}}" >
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" name="inputcategory5" value="{{$student->Address}}" >
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" name="inputcategory6" value="{{ $student->E_Mail}}" >
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">PassWord</label>
    <input type="text" class="form-control" name="inputcategory7" value="{{ $student->Password}}" >
   
  </div>
  
  <INPUT TYPE="submit" CLASS="btn btn-outline btn-default" VALUE="Save">
</form>
</div>







@endsection