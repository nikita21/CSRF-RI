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
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["Username"])) {
     $idErr = "Student_id is required";
   } else {
     $student_id = test_input($_POST["Username"]);
   }

   if (empty($_POST["Name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["Name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed";
       $name=""; 
     }
   }
   
   if (empty($_POST["Email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["Email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
       $emailErr = "Invalid email format"; 
       $email = "";
     }
   }

   if (empty($_POST["choose"])) {
     $adminErr = "    Select 1 option";
   } else {
     $admin = test_input($_POST["choose"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
if(isset($_POST['submit1'])){
if(isset($_POST['Username']) && $name != "" && $email != "" && isset($_POST['choose']) && isset($_POST['Password'])){
	$query = "INSERT INTO temp_users VALUES('$field6','$student_id','$name','$email','$field4','$admin')";
	$result=mysql_query($query,$conn);
	// if suceesfully inserted data into database, send confirmation link to email 
	if($result){
	// ---------------- SEND MAIL FORM ----------------
		require 'Send_Mail.php';
		$to = $email;
		$subject = "Test Mail Subject";
		$body="Your Comfirmation link \r\n";
    	$body.="Click on this link to activate your account \r\n";
    	$body.="https://localhost/UI/insert.php?passkey=$field6";
		//$body = "Hi<br/>Test Mail<br/>Amazon SES"; // HTML  tags
		Send_Mail($to,$subject,$body);

	}

	// if not found 
	else {
	echo "Not found your email in our database";
	}

}
else
{
	echo "Registration Failed!";
	//header("Location: https://localhost/UI/login.php");
}
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


<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="admin" >
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>login</title>
       
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    <link href="sticky-footer.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
 </head>

 <body>
 <div class="container">
	<div class="row">
        <div class="span12">
    		<div class="" id="loginModal">
              <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                <h3>Have an Account?</h3>
              </div>
              <div class="modal-body">
                <div class="well">
                  <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                    <li><a href="#create" data-toggle="tab">Create Account</a></li>
                  </ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active in" id="login">
                            <form class="form-horizontal" action="signin.php" method="post">
							<fieldset>
							  <div id="legend">
								<legend class="">Login as student</legend>
							  </div>    
							  <div class="control-group">
								<!-- Username -->
								<label class="control-label"  for="username">Username</label>
								<div class="controls">
								  <input type="text" id="username" name="Username" placeholder="Username" class="input-xlarge">
								</div>
							  </div>
		 
							  <div class="control-group">
								<!-- Password-->
								<label class="control-label" for="password">Password</label>
								<div class="controls">
								  <input type="password" id="password" name="Password" placeholder="Password" class="input-xlarge">
								</div>
							  </div>
		 
								<br>
							  <div class="control-group">
								<!-- Button -->
								<div class="controls">
								  <input type="submit" class="btn btn-success btn-large" name="submit" id="submit" value="Sign In">
								</div>
							  </div>
							</fieldset>
						  </form>
                            
                            
						</div>
                        
						<div class="tab-pane fade" id="create">
						  <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="tab">
							<fieldset>
								<div id="legend">
								<legend class="">Create account</legend>
							  </div>
							  <div class="control-group">
								<!-- Username -->
								<label class="control-label"  for="username">Username</label>
								<div class="controls">
								 <input type="text" id="username" name="Username" placeholder="Username" class="input-xlarge">
								 <span class="error">* <?php echo $idErr;?></span>
								</div>
							  </div>
                                
                            <div class="control-group">
								<!-- NAme-->
								<label class="control-label" for="Name">Name</label>
								<div class="controls">
								<input type="text" id="Name" name="Name" placeholder="Name" class="input-xlarge">
								<span class="error">* <?php echo $nameErr;?></span>
								</div>
							  </div>
		 
							  <div class="control-group">
								<!-- Email-->
								<label class="control-label" for="Email">Email</label>
								<div class="controls">
								<input type="text" id="Email" name="Email" placeholder="Email id" class="input-xlarge">
								<span class="error">* <?php echo $emailErr;?></span>
								</div>
							  </div>
                                
                                <div class="control-group">
								<!-- choose one-->
								<label class="control-label" for="choose">Create account as</label>
								<div class="controls">
								<input type="radio" name="choose" value="1">Student
                                    &nbsp;&nbsp;
                                <input type="radio" name="choose" value="2">Admin
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="error"> * <?php echo $adminErr;?></span>
                                    </div>
							  </div>
		 
							  <div class="control-group">
								<!-- Password-->
								<label class="control-label" for="password">Password</label>
								<div class="controls">
								<input type="password" id="password" name="Password" placeholder="Password" class="input-xlarge">
								</div>
							  </div>
                                
                                <div class="control-group">
								<!-- Password-->
								<label class="control-label" for="password">Retype Password</label>
								<div class="controls">
								<input type="password" id="Re_password" name="Re_password" placeholder="Retype password" class="input-xlarge">
								</div>
							  </div>
								<br>
							  <div class="control-group">
								<!-- Button -->
								<div class="controls">
								  <input type="submit" class="btn btn-success btn-large" name="submit1" id="submit1" value="Sign Up now!">
								</div>
							  </div>
							</fieldset>
						  </form>
						</div>
					</div>
              </div>
            </div>
        </div>
	</div>
</div>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  </body>
</html>
