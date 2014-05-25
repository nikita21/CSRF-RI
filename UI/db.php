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
   mysql_select_db("bsi",$conn) 
   or die("Unable to connect to database");
   echo 'Database selected';
   #mysql_close($conn);
?>


</body>
</html>
