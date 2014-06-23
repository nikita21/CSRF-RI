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
     $field6=md5(uniqid(rand())); 

     $sql = "SELECT email_id, isAdmin, student_id FROM student_details WHERE(
     student_id='".$uname."' and  password='".$pass."' and isAdmin=1)";
 
      $qury = mysql_query($sql);
 
      $result = mysql_fetch_array($qury);
      

      if($result[0])
      {
        echo "Successful Login!";
        $_SESSION['userName'] = $uname;
        $email = $result[0];
        $isAdmin = $result[1];
        $student_id = $result[2];
        $confirm="INSERT INTO login_confirmation(confirm_code)VALUES('$field6')";
        $res=mysql_query($confirm,$conn);
        require 'Send_Mail.php';
        $to = $email;
        $subject = "Test Mail Subject";
        $body="Your Comfirmation link \r\n";
        $body.="Click on this link to activate your account \r\n";
        $body.="https://localhost/UI/confirmation.php?passkey=$field6&admin=$isAdmin&id=$student_id";
        Send_Mail($to,$subject,$body);
        //header("Location: https://localhost/UI/dashboard.php");
      }
      else
      {
         $sql1 = "SELECT email_id, isAdmin, student_id FROM student_details WHERE(student_id='".$uname."' and  password='".$pass."' and isAdmin=2)";
 
         $qury1 = mysql_query($sql1);
 
         $result1 = mysql_fetch_array($qury1);
         if($result1[0])
         {
            echo "Successful Login!";
            $_SESSION['userName'] = $uname;
            $email = $result1[0];
            $isAdmin = $result1[1];
            $student_id = $result1[2];
            $confirm="INSERT INTO login_confirmation(confirm_code)VALUES('$field6')";
            $res=mysql_query($confirm,$conn);
            require 'Send_Mail.php';
            $to = $email;
            $subject = "Test Mail Subject";
            $body="Your Comfirmation link \r\n";
            $body.="Click on this link to activate your account \r\n";
            $body.="https://localhost/UI/confirmation.php?passkey=$field6&admin=$isAdmin&id=$student_id";
            Send_Mail($to,$subject,$body);
           // header("Location: https://localhost/UI/admin_dashboard.php");
         }
         else if(!empty($uname)){
          echo "Login Failed";
          echo "<br /><a href='login.html'>SignUp</a>";
          echo "<br /><a href='login.html'>SignIn</a>";}
      }
?>
