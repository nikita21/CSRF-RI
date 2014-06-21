 <?php
 include("db.php");
 session_start();
    if(isset($_POST['submit']))
    {
        $mail = $_POST['mail']; 
        $password = ($_POST['password']);
        $newpassword = ($_POST['newpassword']);
        $confirmnewpassword = ($_POST['confirmnewpassword']);

        $result = mysql_query("SELECT password FROM student_details WHERE student_id='$mail'");

            if(!$result)
            {
                echo "The email entered does not exist!";
            }
            else
            if($password != mysql_result($result, 0))
            { ?>
                <script type="text/javascript">window.alert("Entered an incorrect password")</script>
            <?php
                //echo "Entered an incorrect password";
            }

            if($newpassword == $confirmnewpassword)
            {
                $sql = mysql_query("UPDATE student_details SET password = '$newpassword' WHERE student_id = '$mail'");      
            }

            if($sql)
            {
                header("Location: https://localhost/UI/dashboard.php");
                //echo "Congratulations, password successfully changed!";
            }
            else
            { ?>
                <script type="text/javascript">window.alert("New password and confirm password must be the same!")</script>
                <?php
                //echo "New password and confirm password must be the same!";
            }
    
    
        }     
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
          <?php 
                     $str = "SELECT * FROM student_details WHERE student_id = {$_SESSION['userName']}";
                     $rs1 = mysql_query($str)  or die(mysql_error());
                     while($rows = mysql_fetch_array($rs1))
                     {
                         if($rows['isAdmin']==1){
          ?>
            <a class="navbar-brand" href="dashboard.php">Dashboard</a>
          <?php
                        }
                        elseif($rows['isAdmin']==2){
          ?>
            <a class="navbar-brand" href="admin_dashboard.php">Dashboard</a>
          <?php                 
                        }
                     }
          ?>
          
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php 
                     $str = "SELECT * FROM student_details WHERE student_id = {$_SESSION['userName']}";
                     $rs1 = mysql_query($str)  or die(mysql_error());
                     while($rows = mysql_fetch_array($rs1))
                     {
                         if($rows['isAdmin']==1){
          ?>
            <li><a href="feedback.php">Feedback</a></li>
          <?php
                        }
                        elseif($rows['isAdmin']==2){                 
                        }
                     }
          ?>
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
		<form action="" method="POST">
             <div>
                        <label for="mail">Username </label>
              <div class="input-group">
                  <input type="text" id="mail" class="form-control" name="mail" value="<?php echo $_SESSION['userName']; ?>" readonly="readonly" required autofocus />
              </div>
              </div>

		    <div>
                        <label for="oldpassword">CURRENT PASSWORD * </label>
			  <div class="input-group">
			      <input maxlength=100 type="password" id="password" class="form-control" name="password" value="" placeholder="Enter Current Password"
                                required autofocus />
			  </div>
		      </div>				
		    
		    <div>
                        <label for="newpassword">NEW PASSWORD * </label>
                        <div class="input-group">
                            <input maxlength=100 type="password" id="newpassword" class="form-control" name="newpassword" value="" placeholder="New Password"
                                required autofocus />
			</div>
		    </div>
       
		
		    <div>
                        <label for="password">CONFIRM PASSWORD * </label>
                        <div class="input-group">
                            <input maxlength=100 type="password" id="confirmnewpasswd" class="form-control" name="confirmnewpassword" value="" placeholder="Re-enter Password"
                                required autofocus />
			</div>
		    </div>
	      </div>
                        
                        <div class="controls">
                            <button type="submit" name="submit" value="submit" class="btn btn-success center-block btn-block btn-lg">Submit</button>
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
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootbox.js"></script>
  </body>
</html>
