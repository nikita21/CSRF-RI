<?php
 
	session_start(); # Starts the session
 
	session_unset(); #removes all the variables in the session
 
	session_destroy(); #destroys the session
 
	if(!$_SESSION['userName']){
   		
   		header("Location: https://localhost/UI/login.php");
   		echo "Successfully logged out!<br />";
		//echo "<br /><a href='login.html'>Login</a>";
	}
	else
   		 echo "Error Occured!!<br />";
 
?>
