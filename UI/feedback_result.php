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
          <form class="form-horizontal" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
              <div class="row well">
                  <h3><center>See performance</center></h3>
                    <div class="modal-body">
                        <div class="form-group">
                        <div  class="col-xs-6"><p>Course name :</p></div>
                        <div class="col-xs-6"> 
                          <select name="course_sel" id="course_sel">
                              <?php
                                $str = "SELECT DISTINCT course_id FROM output";
                     $rs1 = mysql_query($str)  or die(mysql_error());
                     $course;
                     while($rows = mysql_fetch_array($rs1)){
                         
                              ?>
                          <option value="<?php echo $rows['course_id']?>"><?php echo $rows['course_id']?></option>
                              <?php
                     }  ?>
                              <option value="all">all</option>
                        </select></div>
                        </div>
                        <br/>
                        <div class="form-group">
                        <div  class="col-xs-6"><p>Choose type :</p></div>
                          <div class="col-xs-6">
                               <select name="option_sel">
                                    <option value="1">Average feedback per question of the chosen course</option>
                                    <option value="2">Overall feedback</option>
                               </select>
                          </div>
                        </div>
                        <br/>
<input type="button" class="btn btn-primary btn-lg" name="submit" style="width: 100%;" value="Submit" onclick="showDiv()" />
                  </div>
 		
              </div>
          </form>
     	<div id="welcomeDiv"  style="display:none;" class="well row" ><center>Feedback</center>
          
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Courses feedback</h3>
<?php echo $_POST["course_sel"];
                echo $_POST["option_sel"]; ?>
                <?php if($_POST["option_sel"]==1){ ?>
                <p>q1-Course content met your needs. q2-Instructor has the knowledge of the subject matter. q3-Instructor responded well to student questions. q4-Instructor communicated material effectively. q5-Course offering matched description in course guide.</p><?php } ?>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <?php if($_POST["option_sel"]==1){ ?>
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Course Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="No. of feedback" disabled></th>
                        <th><input type="text" class="form-control" placeholder="q1" disabled></th>
                        <th><input type="text" class="form-control" placeholder="q2" disabled></th>
                        <th><input type="text" class="form-control" placeholder="q3" disabled></th>
                        <th><input type="text" class="form-control" placeholder="q4" disabled></th>
                        <th><input type="text" class="form-control" placeholder="q5" disabled></th>
                        <?php }?>
                        <?php if($_POST["option_sel"]==2){ ?>
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Course Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="No. of feedback" disabled></th>
                        <th><input type="text" class="form-control" placeholder="overall" disabled></th>
                        <?php }?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
<?php 
echo $_POST["course_sel"];
if($_POST["option_sel"]==1){
$query="SELECT course_id,COUNT(course_id),AVG(q1),AVG(q2),AVG(q3),AVG(q4),AVG(q5) FROM output GROUP BY course_id";
$result = mysql_query($query)or die(mysql_error());
$count=1;
echo $_POST["course_sel"];
echo $_POST["option_sel"];
echo ":P";
while($row=mysql_fetch_array($result)){
?>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row[0]; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php echo $row[4]; ?></td>
                        <td><?php echo $row[5]; ?></td>
                        <td><?php echo $row[6]; ?></td>
                        
                    </tr>
                    <?php $count++; } } ?>
                    
<?php
if($_POST["option_sel"]==2){
$query="SELECT course_id,COUNT(course_id),(AVG(q1)+AVG(q2)+AVG(q3)+AVG(q4)+AVG(q5))/5 FROM output GROUP BY course_id";
$result = mysql_query($query)or die(mysql_error());
$count=1;
echo $_POST["course_sel"];
echo ":P";
while($row=mysql_fetch_array($result)){
?>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row[0]; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        
                    </tr>
            <?php $count++; } } ?>
                    
                </tbody>
            </table>
        
</div></div>
          
     </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootbox.js"></script>
    <script src="bootstrap/js/fr.js"></script>
    <script src="bootstrap/js/display.js"></script>

  </body>
  </html>