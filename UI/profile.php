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
    
<br><br>&nbsp;</br></br>
<div class="col-xs-2"></div>
<div class="col-xs-8 jumbotron">
<div class="container ">
	<div class="row">
        <div class="span2 col-xs-2" >
		    <a class="thumbnail pull-left" href="#">
                        <img class="media-object" src="http://critterapp.pagodabox.com/img/user.jpg">
                    </a>
        </div>
        
        <div class="span8 col-xs-5">
            <h3>Name :    <?php echo $_SESSION['userName']; ?></h3>
            <h6>User Name</h6>
            <h6>Email: MyEmail@servidor.com</h6>
        </div>
    </div>
    </div>
</div>
     <div class="col-xs-2"></div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootbox.js"></script>
    <script type="text/javascript" src="bootstrap/js/feedback.js"></script>
  </body>
</html>
