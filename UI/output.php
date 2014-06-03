<?php include_once("db.php");
	  session_start();
 ?>

<?php
#$dbhost = 'localhost:443';
#$username="root";
#$password="ubuntu";
#$database="bsi";
$field1=$_POST['courseId'];
$field2=$_POST['q1'];
$field3=$_POST['q2'];
$field4=$_POST['q3'];
$field5=$_POST['q4'];
$field6=$_POST['q5'];

//@mysql_select_db($database) or die( "Unable to select database");
$query = "INSERT INTO output VALUES('$field1','$field2','$field3','$field4','$field5','$field6')";

if (!mysql_query($query,$conn))
{
  die('Error: ' . mysql_error());
}
echo "1 record added";
echo $field1;
//mysql_query($query);
mysql_close();
?>