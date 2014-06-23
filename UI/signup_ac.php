<?php include_once("db.php");
	  session_start();
 ?>

<?php
#$dbhost = 'localhost:443';
#$username="root";
#$password="ubuntu";
#$database="bsi";
#$student_id=$_POST['Username'];
#$field2=$_POST['Name'];
#$field3=$_POST['Email'];
$field4=$_POST['Password'];
#$field5=$_POST['choose'];
$field6=md5(uniqid(rand())); 

$nameErr = $emailErr = $adminErr = $idErr = "";
$student_id = $name = $email = $admin = "";

//@mysql_select_db($database) or die( "Unable to select database");
//if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["Username"])) {
     $idErr = "Student_id is required";
   } else {
     $student_id = ($_POST["Username"]);
   }

   if (empty($_POST["Name"])) {
     $nameErr = "Name is required";
   } else {
     $name = ($_POST["Name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["Email"])) {
     $emailErr = "Email is required";
   } else {
     $email = ($_POST["Email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
       $emailErr = "Invalid email format"; 
     }
   }

   if (empty($_POST["choose"])) {
     $adminErr = "Select 1 option";
   } else {
     $admin = ($_POST["choose"]);
   }
//}
$query = "INSERT INTO temp_users VALUES('$field6','$student_id','$name','$email','$field4','$admin')";
$result=mysql_query($query,$conn);
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
if($sentmail = mail($to,$subject,$message,$header)){
echo "Your Confirmation link Has Been Sent To Your Email Address.";
}
else {
echo "Cannot send Confirmation link to your e-mail address";
}

//if($field5 == 1)
//{
//	$_SESSION['userName'] = $field1;
//	header("Location: https://localhost/UI/dashboard.php");
//}
//else if($field5 == 2)
//{
	//$_SESSION['userName'] = $field1;
//	header("Location: https://localhost/UI/admin_dashboard.php");
//}
//mysql_close();
?>
