<?php include_once("db.php");
	  session_start();
?>

<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'bsi');
define('DB_USER','root');
define('DB_PASSWORD','ubuntu');

/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function SignIn()
{
session_start();   //starting the session for user profile page
if(!empty($_POST['Username']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$query = mysql_query("SELECT *  FROM student_details where student_id = '$_POST["Username"]' AND password = '$_POST["Password"]'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($row['student_id']) AND !empty($row['password']))
	{
		$_SESSION['student_id'] = $row['password'];
		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";

	}
	else
	{
		echo "SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}
}
if(isset($_POST['submit']))
{
	SignIn();
}

?>
