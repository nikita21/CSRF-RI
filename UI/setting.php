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
<div class="jumbotron">
	<div class="container jumbotron">
	  <div class="row">
          <div class="col-md-1"></div>
	    <div class="col-md-10">
	      <div align="center">
		<form action="/change_pass/" method="POST">
		    <div>
                        <label for="oldpassword">OLD PASSWORD * </label>
			  <div class="input-group">
			      <input maxlength=100 type="password" id="oldpassword" class="form-control" name="oldpass" placeholder="Valid Password"
                                required autofocus />
			  </div>
		      </div>				
		    
		    <div>
                        <label for="newpassword">NEW PASSWORD * </label>
                        <div class="input-group">
                            <input maxlength=100 type="password" id="passwd" class="form-control" name="pass" placeholder="Valid Password"
                                required autofocus />
			</div>
		    </div>
       
		
		    <div>
                        <label for="password">CONFIRM PASSWORD * </label>
                        <div class="input-group">
                            <input maxlength=100 type="password" id="conf_passwd" class="form-control" placeholder="Valid Password"
                                required autofocus />
			</div>
		    </div>
	      </div>
                        
                        <div class="controls">
                            <button type="submit" class="btn btn-success center-block btn-block btn-lg">Submit</button>
                        </div>
		</form>
	      </div>
	  </div>
      </div>
  </div>
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
