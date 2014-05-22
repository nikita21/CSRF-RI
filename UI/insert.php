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

//@mysql_select_db($database) or die( "Unable to select database");
$query = "INSERT INTO student_details VALUES($field1,'$field2','$field3','$field4')";
#$query = "INSERT INTO student_details VALUES(509,'asd','gh@pix.com','qwer')";

if (!mysql_query($query,$conn))
{
  die('Error: ' . mysql_error());
}
echo "1 record added";
//mysql_query($query);
mysql_close();
?>
