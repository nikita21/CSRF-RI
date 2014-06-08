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

    <title>Dashboard</title>

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
            <li><a href="setting.php">Help</a></li>
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
<form class="form-horizontal" action="output.php" method="post">
     <div class="row center well">
         <h3><center>Give feedback</center></h3>
 		<div class="modal-body">
 			<h5><center>Rate accordingly: 1 for below expectations,2 for not bad, 3 for neutral, 4 for good and 5 for excellent</center></h5>
            <input name="username" type="hidden" value="<?php echo $_SESSION['userName']; ?>" readonly="readonly">
 			<div class="form-group">
 			<div  class="col-xs-9"><p>Course name :</p></div>
 			<div class="col-xs-3"><input class="form-control" name="courseId" id="courseId" readonly="readonly" value="<?php echo $_POST["Course"]; ?>" /></div>
 			</div>
 			
 			<div class="form-group">
 			<div  class="col-xs-9"><p>Course content met your needs :</p></div>
 			<div class="col-xs-3"><!--input class="form-control" type="text" placeholder="rate" name="q1" id="q1"-->
                <!--form name=myform-->
                <input type="radio" name="q1" value="1">1
                <input type="radio" name="q1" value="2">2
                <input type="radio" name="q1" value="3">3
                <input type="radio" name="q1" value="4">4
                <input type="radio" name="q1" value="5">5
                <!--/form--></div>
 			</div>
 			
 			<div class="form-group">
 			<div  class="col-xs-9"><p>Instructor has the knowledge of the subject matter :</p></div>
 			<div class="col-xs-3">
                <input type="radio" name="q2" value="1">1
                <input type="radio" name="q2" value="2">2
                <input type="radio" name="q2" value="3">3
                <input type="radio" name="q2" value="4">4
                <input type="radio" name="q2" value="5">5</div>
 		</div>
 			
 			<div class="form-group">
 			<div  class="col-xs-9"><p>Instructor responded well to student questions :</p></div>
 			<div class="col-xs-3"><input type="radio" name="q3" value="1">1
                <input type="radio" name="q3" value="2">2
                <input type="radio" name="q3" value="3">3
                <input type="radio" name="q3" value="4">4
                <input type="radio" name="q3" value="5">5</div>
 			</div>
 			
 			<div class="form-group">
 			<div  class="col-xs-9"><p>Instructor communicated material effectively :</p></div>
 			<div class="col-xs-3"><input type="radio" name="q4" value="1">1
                <input type="radio" name="q4" value="2">2
                <input type="radio" name="q4" value="3">3
                <input type="radio" name="q4" value="4">4
                <input type="radio" name="q4" value="5">5</div>
 			</div>
 			
 			<div class="form-group">
 			<div  class="col-xs-9"><p>Course offering matched description in course guide :</p></div>
 			<div class="col-xs-3"><input type="radio" name="q5" value="1">1
                <input type="radio" name="q5" value="2">2
                <input type="radio" name="q5" value="3">3
                <input type="radio" name="q5" value="4">4
                <input type="radio" name="q5" value="5">5</div>
 			</div>
 		 <input type="submit" class="btn btn-success btn-lg" name="flag" id="flag"style="width: 100%;" value="Submit"><!--span class="glyphicon glyphicon-ok-sign"></span-->
 
 		</div>
 		
         </div>
     <!-- /.modal-content --> </form>
     	
   </div>
       <!-- /.modal-dialog --> 
     

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootbox.js"></script>
  </body>
  </html>