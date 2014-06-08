<?php 
 include_once("signin.php"); 
 session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>homepage</title>
       
    <!--link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">    <!-- Custom styles for this template -->
    <!--link href="jumbotron.css" rel="stylesheet">
    <link href="sticky-footer.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
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
 				<td><p><input type="submit" class="btn btn-success btn-xs" onClick="location.href='feedback_form.php'" name="Course1" value="enter"><span class="glyphicon glyphicon-pencil"></span></p></td>
 				
  				</tr>
  				
  				<tr>
  				<td>Course2</td>
 				<td></td>
 				<td><p><input type="submit" class="btn btn-success btn-xs" onClick="location.href='feedback_form.php'" name="Course2" value="enter"><span class="glyphicon glyphicon-pencil"></span></p></td>
 				
  				</tr>
  
  				<tr>
  				<td>Course3</td>
  				<td>feedback not given</td>
 				<td><p><input type="submit" class="btn btn-success btn-xs" onClick="location.href='feedback_form.php'" name="Course3" value="enter"><span class="glyphicon glyphicon-pencil"></span></p></td>
 				
  				</tr>
  				
  				<tr>
  			    <td>Course4</td>
  				<td>feedback given</td>
 				<td><p><input type="submit" class="btn btn-success btn-xs" onClick="location.href='feedback_form.php'" name="Course4" value="enter"><span class="glyphicon glyphicon-pencil"></span></p></td>
 				
  				</tr>
  				
  				<tr>
  				<td>Course5</td>
 				<td></td>
 				<td><p><input type="submit" class="btn btn-success btn-xs" onClick="location.href='feedback_form.php'" name="Course2" value="enter"><span class="glyphicon glyphicon-pencil"></span></p></td>
 				</tr>
         
  			</tbody>
        </table>
          </div>
  	</div>
  </div>
  </div>
    
 <!--Edit button-->
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootbox.js"></script>
    <script type="text/javascript" src="bootstrap/js/feedback.js"></script>
  </body>
</html>
