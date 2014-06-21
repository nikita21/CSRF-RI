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
          <a class="navbar-brand" href="admin_dashboard.php">Dashboard</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
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
      <br>&nbsp;<br></br></br>
      
      
      <div class="container">
          <form class="form-horizontal" action="file_generate.php" method="GET">
              <div class="row well">
                  <h3><center>See performance</center></h3>
                    <div class="modal-body">
                        <div class="form-group">
                        <div  class="col-xs-6"><p>Course name :</p></div>
                        <div class="col-xs-6"> 
                          <select>
                          <option name="course" value="course1">Course1</option>
                          <option name="course" value="course2">Course2</option>
                          <option name="course" value="course3">Course3</option>
                          <option name="course" value="course4">Course4</option>
                        </select></div>
                        </div>
                        <br/>
                        <div class="form-group">
                        <div  class="col-xs-6"><p>Choose type :*</p></div>
                          <div class="col-xs-6">
                               <select>
                                    <option name="option" value="1">Average feedback per question of the chosen course</option>
                                    <option name="option" value="2">Overall feedback</option>
                               </select>
                          </div>
                        </div>
                        <br/><br/>
                    <input type="submit" class="btn btn-success btn-lg" name="submit" id="submit" style="width: 100%;" value="Submit">

                  </div>
 		
              </div>
          </form>
     	
     </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootbox.js"></script>
  </body>
  </html>