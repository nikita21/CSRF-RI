        <?php include_once("db.php"); 
  			session_start();
 		?>
 		
        <?php
        	$field1=$_POST['courseId'];
			$field2=$_POST['q1'];
			$field3=$_POST['q2']
			$field4=$_POST['q3'];
			$field5=$_POST['q4'];
			$field6=$_POST['q5'];
			//ield7=$_POST['flag'];
        	//if(isset($_POST['flag'])){
        		//echo "flag will be set to 1 if the form has been submitted";
        	//}
        	//$query = "INSERT INTO output VALUES('$field1','$field2','$field3','$field4','$field5','$field6')";
        	//if (!mysql_query($query,$conn))
			//{
  			//	die('Error: ' . mysql_error());
			//}
			echo "1 record added";
			echo  $field1;
		//mysql_query($query);
			mysql_close();
		?>