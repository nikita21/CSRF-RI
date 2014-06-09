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
          <a class="navbar-brand" href="dashboard.php">Dashboard</a>
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
        <form method="post" action="feedback_form.php">
		<table id="mytable" class="table table-bordred table-striped">
            <thead>
		    <th>Course Name</th>
			<th>Status</th>
			<th>Edit</th>
		    </thead>
			<tbody>
    
				<tr>
				<td>Course1</td>
 				<td>
                    <?php 
                     $str = "SELECT * FROM output WHERE student_id = {$_SESSION['userName']}";
                     $rs1 = mysql_query($str)  or die(mysql_error());
                     $f=0;
                     while($rows = mysql_fetch_array($rs1)){
                         if($rows['flag']==1 && $rows['course_id']==Course1 && $f!=1){
                            $f=1;
                            echo "feedback given";
                        }
                        elseif($rows['flag']==0 && $rows['course_id']==Course1 && $f!=1){
                            echo "feedback not given";
                            
                        }
                     }
                     if($f==0)
                        echo "feedback not given";
                    ?>
                </td>
 				<td><p>
                    <?php if($f==0){ ?>
                    <input type="submit" class="btn btn-success btn-xs" onClick="location.href='feedback_form.php'" name="Course" value="Course1">
                    <?php }?>
                    <span class="glyphicon glyphicon-pencil"></span>
                    </p></td>
 				
  				</tr>
  				
  				<tr>
  				<td>Course2</td>
 				<td><?php 
                     $str = "SELECT * FROM output WHERE student_id = {$_SESSION['userName']}";
                     $rs1 = mysql_query($str)  or die(mysql_error());
                     $f=0;
                     while($rows = mysql_fetch_array($rs1)){
                         if($rows['flag']==1 && $rows['course_id']==Course2 && $f!=1){
                            $f=1;
                            echo "feedback given";
                        }
                        elseif($rows['flag']==0 && $rows['course_id']==Course2 && $f!=1){
                            echo "feedback not given";
                            
                        }
                     }
                     if($f==0)
                        echo "feedback not given";
                    ?></td>
 				<td><p>
                    <?php if($f==0){ ?>
                    <input type="submit" class="btn btn-success btn-xs" onClick="location.href='feedback_form.php'" name="Course" value="Course2">
                    <?php }?>
                    <span class="glyphicon glyphicon-pencil"></span></p></td>
 				
  				</tr>
  
  				<tr>
  				<td>Course3</td>
  				<td><?php 
                     $str = "SELECT * FROM output WHERE student_id = {$_SESSION['userName']}";
                     $rs1 = mysql_query($str)  or die(mysql_error());
                     $f=0;
                     while($rows = mysql_fetch_array($rs1)){
                         if($rows['flag']==1 && $rows['course_id']==Course3 && $f!=1){
                            $f=1;
                            echo "feedback given";
                        }
                        elseif($rows['flag']==0 && $rows['course_id']==Course3 && $f!=1){
                            echo "feedback not given";
                            
                        }
                     }
                     if($f==0)
                        echo "feedback not given";
                    ?></td>
 				<td><p>
                    <?php if($f==0){ ?>
                    <input type="submit" class="btn btn-success btn-xs" onClick="location.href='feedback_form.php'" name="Course" value="Course3">
                    <?php }?>
                    <span class="glyphicon glyphicon-pencil"></span></p></td>
 				
  				</tr>
  				
  				<tr>
  			    <td>Course4</td>
  				<td><?php 
                     $str = "SELECT * FROM output WHERE student_id = {$_SESSION['userName']}";
                     $rs1 = mysql_query($str)  or die(mysql_error());
                     $f=0;
                     while($rows = mysql_fetch_array($rs1)){
                         if($rows['flag']==1 && $rows['course_id']==Course4 && $f!=1){
                            $f=1;
                            echo "feedback given";
                        }
                        elseif($rows['flag']==0 && $rows['course_id']==Course4 && $f!=1){
                            echo "feedback not given";
                            
                        }
                     }
                     if($f==0)
                        echo "feedback not given";
                    ?></td>
 				<td><p>
                    <?php if($f==0){ ?>
                    <input type="submit" class="btn btn-success btn-xs" onClick="location.href='feedback_form.php'" name="Course" value="Course4">
                    <?php } ?>
                    <span class="glyphicon glyphicon-pencil"></span></p></td>
 				
  				</tr>
  				
  				<tr>
  				<td>Course5</td>
 				<td><?php 
                     $str = "SELECT * FROM output WHERE student_id = {$_SESSION['userName']}";
                     $rs1 = mysql_query($str)  or die(mysql_error());
                     $f=0;
                     while($rows = mysql_fetch_array($rs1)){
                         
                        if($rows['flag']==1 && $rows['course_id']==Course5 && $f!=1){
                            $f=1;
                            echo "feedback given";
                        }
                        elseif($rows['flag']==0 && $rows['course_id']==Course5 && $f!=1){
                            echo "feedback not given";
                            
                        }
                     }
                     if($f==0)
                        echo "feedback not given";
                    ?></td>
 				<td><p>
                    <?php if($f==0){ ?>
                    <input type="submit" class="btn btn-success btn-xs" onClick="location.href='feedback_form.php'" name="Course" value="Course5">
                    <?php }?>
                    <span class="glyphicon glyphicon-pencil"></span></p></td>
 				</tr>
         
  			</tbody>
        </table>
      </form>
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
