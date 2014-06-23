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
$field6=md5(uniqid(rand())); 
//@mysql_select_db($database) or die( "Unable to select database");
$query = "INSERT INTO temp_users VALUES('$field6','$field1','$field2','$field3','$field4','$field5')";
$result=mysql_query($query);
// if suceesfully inserted data into database, send confirmation link to email 
if($result){
// ---------------- SEND MAIL FORM ----------------

// send e-mail to ...
$to=$field3;

// Your subject
$subject="Your confirmation link here";

// From
$header="from: your name <your email>";

// Your message
$message="Your Comfirmation link \r\n";
$message.="Click on this link to activate your account \r\n";
$message.="http://www.yourweb.com/confirmation.php?passkey=$field6";

// send email
$sentmail = mail($to,$subject,$message,$header);
}

// if not found 
else {
echo "Not found your email in our database";
}

// if your email succesfully sent
if($sentmail){
echo "Your Confirmation link Has Been Sent To Your Email Address.";
}
else {
echo "Cannot send Confirmation link to your e-mail address";
}

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
mysql_close();
?>
