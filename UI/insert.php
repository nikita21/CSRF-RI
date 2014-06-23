<?php include_once("db.php");
	  session_start();
 ?>

<?php
#$dbhost = 'localhost:443';
#$username="root";
#$password="ubuntu";
#$database="bsi";

// Passkey that got from link 
$passkey=$_GET['passkey'];
$tbl_name1="temp_users";

// Retrieve data from table where row that match this passkey 
$sql1="SELECT * FROM $tbl_name1 WHERE confirm_code ='$passkey'";
$result1=mysql_query($sql1,$conn);

// If successfully queried 
if($result1){

// Count how many row has this passkey
$count=mysql_num_rows($result1);

// if found this passkey in our database, retrieve data from table "temp_members_db"
if($count==1){

$rows=mysql_fetch_array($result1);
$student_id=$rows['student_id'];
$name=$rows['name'];
$email=$rows['email_id'];
$password=$rows['password']; 
$admin=$rows['isAdmin'];
$tbl_name2="student_details";

// Insert data that retrieves from "temp_members_db" into table "registered_members" 
$sql2="INSERT INTO $tbl_name2(student_id,name, email_id, password, isAdmin)VALUES('$student_id','$name', '$email', '$password', '$admin')";
$result2=mysql_query($sql2,$conn);
}

// if not found passkey, display message "Wrong Confirmation code" 
else {
echo "Wrong Confirmation code";
}

// if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db"
if($result2){

echo "Your account has been activated";

if($admin == 1)
{
	$_SESSION['userName'] = $student_id;
	echo "<br /><a href='dashboard.php'>Dashboard</a>";
	//header("Location: https://localhost/UI/dashboard.php");
}
else if($admin == 2)
{
	//$_SESSION['isAdmin'] = $field5;
	$_SESSION['userName'] = $student_id;
	echo "<br /><a href='admin_dashboard.php'>Dashboard</a>";
	//header("Location: https://localhost/UI/admin_dashboard.php");
}

// Delete information of this user from table "temp_members_db" that has this passkey 
$sql3="DELETE FROM $tbl_name1 WHERE confirm_code = '$passkey'";
$result3=mysql_query($sql3,$conn);

}

}

//echo "1 record added";
//echo $field1;
//mysql_query($query);
mysql_close();
?>
