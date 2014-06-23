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
          <form class="form-horizontal" action="" method="post">
              <div class="row well">
                  <h3><center>See performance</center></h3>
                    <div class="modal-body">
                        <div class="form-group">
                        <div  class="col-xs-6"><p>Course name :</p></div>
                        <div class="col-xs-6"> 
                          <select>
                              <?php
                                $str = "SELECT DISTINCT course_id FROM output";
                     $rs1 = mysql_query($str)  or die(mysql_error());
                     $f=0;
                     while($rows = mysql_fetch_array($rs1)){
                         
                              ?>
                          <option name="course" value="<?php echo $rows['course_id']?>"><?php echo $rows['course_id']?></option>
                              <?php
                     }  ?>
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
                    <!--input type="submit" class="btn btn-success btn-lg" name="submit" id="submit" style="width: 100%;" value="Submit" onclick="showDiv()" -->
<input type="button" class="btn btn-primary btn-lg" name="submit" style="width: 100%;" value="Submit" onclick="showDiv()" />
                  </div>
 		
              </div>
          </form>
     	<div id="welcomeDiv"  style="display:none;" class="well row" ><center>Feedback</center>
          
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
                        <?php
                            $course = $_POST['course'];
                            $option = $_POST['option'];
                            if($option==1){
                                $sql = mysql_query(" SELECT AVG(q1),AVG(q2) FROM table_name WHERE student_id = '$course'");
                            }
                        ?>
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
        
</div></div>
          
     </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootbox.js"></script>
    <script src="bootstrap/js/fr.js"></script>
    <script src="bootstrap/js/display.js"></script>

  </body>
  </html>