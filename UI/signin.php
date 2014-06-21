<?php 
  include_once("db.php"); 
  session_start();
?>
 
<?php
 
    $dbhost = 'localhost:443';
    $dbuser = 'root';
    $dbpass = 'ubuntu';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
     $uname = $_POST['Username'];
     $pass = $_POST['Password'];
 
     $sql = "SELECT count(*) FROM student_details WHERE(
     student_id='".$uname."' and  password='".$pass."' and isAdmin=1)";
 
      $qury = mysql_query($sql);
 
      $result = mysql_fetch_array($qury);
 
      if($result[0]>0)
      {
        echo "Successful Login!";
        $_SESSION['userName'] = $uname;
	#open("homepage.html");
        //echo "<br />Welcome ".$_SESSION['userName']."!";
	//echo "<br /><a href='dashboard.php'>Go to Dashboard</a>";
        
        header("Location: https://localhost/UI/dashboard.php");
         
        #echo "<br /><a href='signupform.php'>SignUp</a>";
        #echo "<br /><a href='signinform.php'>SignIn</a>";
        #echo "<br /><a href='logout.php'>LogOut</a>";
      }
      else
      {
         $sql1 = "SELECT count(*) FROM student_details WHERE(student_id='".$uname."' and  password='".$pass."' and isAdmin=2)";
 
         $qury1 = mysql_query($sql1);
 
         $result1 = mysql_fetch_array($qury1);
         if($result1[0]>0)
         {
            echo "Successful Login!";
            $_SESSION['userName'] = $uname;
            header("Location: https://localhost/UI/admin_dashboard.php");
         }
         else if(!empty($uname)){
          echo "Login Failed";
          echo "<br /><a href='login.html'>SignUp</a>";
          echo "<br /><a href='login.html'>SignIn</a>";}
      }
?>
