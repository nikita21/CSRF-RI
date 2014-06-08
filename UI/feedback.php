<?php 
 include_once("signin.php"); 
 session_start(); 
?>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="admin" >
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>homepage</title>
       
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    <link href="sticky-footer.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
 </head>

 <body>
     
     
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="#">Help</a></li>
            <li><div class="btn-group pull-right">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#" style="padding-top:13px"><i class="icon-user"></i> Welcome, <?php echo $_SESSION['userName']; ?><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="setting.php"><i class="icon-wrench"></i> Settings</a></li>
						<li class="divider"></li>
						<li><a href="logout.php"><i class="icon-share"></i> Logout</a></li>
					</ul>
				</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
<div class="container">
	<div class="row">
		<div class="col-md-12">
        <div class="modal-header">
		<h4>Courses available</h4>
		</div>
        <div class="table-responsive modal-body">
        
		<table id="mytable" class="table table-bordred table-striped">
            <thead>
		    <th>Course Name</th>
			<th>Status</th>
			<th>Edit</th>
		    </thead>
			<tbody>
    
				<tr>
				<td>Course1</td>
 				<td></td>
 				<td><p><button class="btn btn-primary btn-xs open-AddCourseDialog" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip" data-id="Course1" href="#addCourseDialog"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
 				
  				</tr>
  				
  				<tr>
  				<td>Course2</td>
 				<td></td>
 				<td><p><button class="btn btn-primary btn-xs open-AddCourseDialog" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip" data-id="Course2" href="#addCourseDialog"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
 				
  				</tr>
  
  				<tr>
  				<td>Course3</td>
  				<td>feedback not given</td>
 				<td><p><button class="btn btn-primary btn-xs open-AddCourseDialog" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip" data-id="Course3" href="#addCourseDialog"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
 				
  				</tr>
  				
  				<tr>
  			    <td>Course4</td>
  				<td>feedback given</td>
 				<td><p><button class="btn btn-primary btn-xs open-AddCourseDialog" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip" data-id="Course4" href="#addCourseDialog"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
 				
  				</tr>
  				
  				<tr>
  				<td>Course5</td>
 				<td></td>
 				<td><p><button class="btn btn-primary btn-xs open-AddCourseDialog" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip" data-id="Course5" href="#addCourseDialog"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
 				</tr>
         
  			</tbody>
 
          </div>
  	</div>
  </div>
  
 <!--Edit button-->
 <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
     <div class="modal-dialog">
     	<form class="form-horizontal" role="form" action="output.php" method="post">
     <div class="modal-content">
         <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         <h4 class="modal-title custom_align" id="Heading">Give feedback</h4>
 		</div>
 		<div class="modal-body">
 			<p>Rate accordingly: 1 for below expectations,2 for not bad, 3 for neutral, 4 for good and 5 for excellent</p>
            <input name="username" value="<?php echo $row['student_id'].?>">
 			<div class="form-group">
 			<div  class="col-xs-9"><p>Course name :</p></div>
 			<div class="col-xs-3"><input class="form-control" name="courseId" id="courseId" readonly="readonly" value=""/></div>
 			</div>
 			</br>&nbsp
 			<div class="form-group">
 			<div  class="col-xs-9"><p>Course content met your needs :</p></div>
 			<div class="col-xs-3"><input class="form-control" type="text" placeholder="rate" name="q1" id="q1"></div>
 			</div>
 			</br>&nbsp
 			<div class="form-group">
 			<div  class="col-xs-9"><p>Instructor has the knowledge of the subject matter :</p></div>
 			<div class="col-xs-3"><input class="form-control" type="text" placeholder="rate" name="q2" id="q2"></div>
 		</div>
 			</br>&nbsp
 			<div class="form-group">
 			<div  class="col-xs-9"><p>Instructor responded well to student questions :</p></div>
 			<div class="col-xs-3"><input class="form-control" type="text" placeholder="rate" name="q3" id="q3"></div>
 			</div>
 			</br>&nbsp
 			<div class="form-group">
 			<div  class="col-xs-9"><p>Instructor communicated material effectively :</p></div>
 			<div class="col-xs-3"><input class="form-control" type="text" placeholder="rate" name="q4" id="q4"></div>
 			</div>
 			</br>&nbsp
 			<div class="form-group">
 			<div  class="col-xs-9"><p>Course offering matched description in course guide :</p></div>
 			<div class="col-xs-3"><input class="form-control" type="text" placeholder="rate" name="q5" id="q5"></div>
 			</div>
 		</div>
         <div class="modal-footer ">
         <input type="submit" class="btn btn-success btn-lg" name="flag" id="flag"style="width: 100%;"><!--span class="glyphicon glyphicon-ok-sign"></span-->
 
 		</div>
 		
         </div>
     <!-- /.modal-content --> </form>
   </div>
       <!-- /.modal-dialog --> 
     </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootbox.js"></script>
    <script type="text/javascript" src="bootstrap/js/feedback.js"></script>
  </body>
</html>