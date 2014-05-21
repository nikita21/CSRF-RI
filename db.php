<html>
<head>
	<title>Connecting MySQL Server</title>
</head>
<body>
<?php
   $dbhost = 'localhost:443';
   $dbuser = 'root';
   $dbpass = 'ubuntu';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   echo 'Connected successfully<br>';

   //select a database to work with
   $selected = mysql_select_db("bsi",$conn) 
   or die("Could not select examples");
   echo 'Db selected';

   //mysql_query($conn,"INSERT INTO student_details (student_id, name, email_id, password)
   //VALUES (401, 'Griffin', 'griffin_123@hotmail.com', '123456')");

   //mysql_query($conn,"INSERT INTO student_details (student_id, name, email_id, password) 
   //VALUES (402, 'Quagmire', 'quag@gmail.com', 'asdfgh')");

   //mysql_query($conn,"INSERT INTO courses (student_id, courses, flags)
   //VALUES (401, 'cryptography', 0)");

   //mysql_query($conn,"INSERT INTO courses (student_id, courses, flags) 
   //VALUES (402, 'algorithms', 0)");
   mysql_close($conn);
?>


</body>
</html>
