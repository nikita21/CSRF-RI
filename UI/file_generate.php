<?php include_once("insert.php");
	  session_start();
 ?>

<?php
#$dbhost = 'localhost:443';
#$username="root";
#$password="ubuntu";
#$database="bsi";
$field1=$_GET['course'];
$field2=$_POST['option'];
$field3=$_POST['submit'];

//@mysql_select_db($database) or die( "Unable to select database");
if (isset($_GET['submit'])){
	if(isset($_GET['course']) && isset($_GET['option'])){
                     $str = "SELECT * FROM output WHERE (course_id='".$field1."')";
                     $rs1 = mysql_query($str)  or die(mysql_error());
                     while($rows = mysql_fetch_array($rs1)){
                         
                            echo "feedback given";
                     }

		if (!mysql_query($query,$conn))
		{
		  die('Error: ' . mysql_error());
		}
		header("Location: https://localhost/UI/feedback_result.php");
	}
	else
	{ ?>
		<script type="text/javascript">window.alert("Fields marked with asterisk are required")</script>
<?php 
      //header("Location: https://localhost/UI/feedback.php");
	}
}
echo "<br /><a href='feedback.php'>Course Dashboard</a>";
//echo $field1;
//mysql_query($query);
mysql_close();
?>