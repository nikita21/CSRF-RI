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
    <link href="bootstrap/css/display.css" rel="stylesheet">

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
        <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Courses feedback</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Course Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="No. of feedback" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Avg feedback" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Course1</td>
                        <td>240</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Course2</td>
                        <td>220</td>
                        <td>3.5</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Course3</td>
                        <td>235</td>
                        <td>4.5</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootbox.js"></script>
    <script src="bootstrap/js/display.js"></script>
  </body>
  </html>