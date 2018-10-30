<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
	body { padding-top:30px; }
.panel-body .btn:not(.btn-block) { width:500px;margin-bottom:10px; }

</style>
</head>
<body>

 <section id="main-content">
     
<div class="container">
<div class="row" >
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Online Examination</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                          <a href="#" class="btn btn-info btn-lg" role="button"><i class="icon_house_alt"></i>  <br/>Dashboard</a>
                          <a href="{{url('category')}}" class="btn btn-info btn-lg" role="button"><i class="icon_tag_alt"></i> <br/>Category</a>
                          <a href="{{url('subject')}}"  class="btn btn-info btn-lg" role="button"><i class="icon_building"></i> <br/>Subject</a>
                          <a href="{{url('exam')}}" class="btn btn-info btn-lg" role="button"> <i class="icon_pencil"></i> <br/>Exam</a>
                        </div>
                        <div class="col-xs-6 col-md-6">
                          <a href="{{url('student')}}" class="btn btn-info btn-lg" role="button"> <i class="icon_profile"></i><br/>Student</a>
                          <a href="#" class="btn btn-info btn-lg" role="button"><i class="icon_question"></i> <br/>Question</a>
                          <a href="{{url('notice')}}" class="btn btn-info btn-lg" role="button"> <i class="icon_menu-square_alt2"></i> <br/>Notice</a>
                          <a href="#" class="btn btn-info btn-lg" role="button"> <i class="icon_rook"></i> <br/>View Result</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</body>
</html>