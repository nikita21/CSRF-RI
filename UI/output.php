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
$field7=$_POST['submit1'];
$field8=$_POST['username'];

//@mysql_select_db($database) or die( "Unable to select database");
if (isset($_POST['submit1'])){
	if(isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5'])){
		$field7 = 1;
	    $query = "INSERT INTO output VALUES('$field8','$field1','$field2','$field3','$field4','$field5','$field6','$field7')";

		if (!mysql_query($query,$conn))
		{
		  die('Error: ' . mysql_error());
		}
	    echo "FEEDBACK ACCEPTED";
	}
	else
	{ ?>
		<script type="text/javascript">window.alert("Fields marked with asterisk are required")</script>
<?php 
	}
}
echo "<br /><a href='feedback.php'>Course Dashboard</a>";
//echo $field1;
//mysql_query($query);
mysql_close();
?>