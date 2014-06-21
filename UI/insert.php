<?php include_once("db.php");
	  session_start();
 ?>

<?php
#$dbhost = 'localhost:443';
#$username="root";
#$password="ubuntu";
#$database="bsi";
$field1=$_POST['Username'];
$field2=$_POST['Name'];
$field3=$_POST['Email'];
$field4=$_POST['Password'];
$field5=$_POST['choose'];
//@mysql_select_db($database) or die( "Unable to select database");
$query = "INSERT INTO student_details VALUES('$field1','$field2','$field3','$field4','$field5')";

if (!mysql_query($query,$conn))
{
  die('Error: ' . mysql_error());
}
if($field5 == 1)
{
	//$_SESSION['isAdmin'] = $field5;
	$_SESSION['userName'] = $field1;
	header("Location: https://localhost/UI/dashboard.php");
}
else if($field5 == 2)
{
	//$_SESSION['isAdmin'] = $field5;
	$_SESSION['userName'] = $field1;
	header("Location: https://localhost/UI/admin_dashboard.php");
}
//echo "1 record added";
//echo $field1;
//mysql_query($query);
mysql_close();
?>
