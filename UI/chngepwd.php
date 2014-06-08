 <?php
 include("db.php");
 //session_start();
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
            {
                echo "Entered an incorrect password";
            }

            if($newpassword == $confirmnewpassword)
            {
                $sql = mysql_query("UPDATE student_details SET password = '$newpassword' WHERE student_id = '$mail'");      
            }

            if($sql)
            {
                echo "Congratulations, password successfully changed!";
            }
            else
            {
                echo "New password and confirm password must be the same!";
            }
    
    
        }     
    ?>


    <form name="newprwd" action="" method="post">
    Username :<input type="text" name="mail" value="<?php echo $_SESSION['userName']; ?>"><br>
    Password :<input type="password" name="password" value=""><br>
    New Password :<input type="password" name="newpassword" value=""><br>
    Confirm Password :<input type="password" name="confirmnewpassword" value=""><br>
    <input type="submit" name="submit" value="submit"><br>
    </form>