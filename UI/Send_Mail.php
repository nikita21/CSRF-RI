<?php
	function Send_Mail($to,$subject,$body){
	    require("class.phpmailer.php");
	    //$from = "from@email.com";
		$mail = new PHPMailer();

		$mail->IsSMTP(true);  // telling the class to use SMTP

		$mail->Host     = "ssl://smtp.gmail.com"; // SMTP server

		$mail->SMTPAuth   = true; 
		$mail->Mailer = "smtp";                 // enable SMTP authentication
		$mail->SMTPSecure = "ssl";
		$mail->Port       = 465; 
		$mail->From     = "nnikita2104@gmail.com";

		$mail->Username = "nnikita2104@gmail.com";  // SMTP username
        $mail->Password = "9672322@787#";

		//$mail->addAddress("nikita.mantri21@gmail.com");

		$mail->Subject  = $subject;

		$mail->MsgHTML($body);

		$address = $to;
		$mail->AddAddress($address, $to);

		//$mail->Body     = "Hi! \n\n This is my first e-mail sent through PHPMailer.";

		//$mail->WordWrap = 50;

		if(!$mail->Send()) {

		echo 'Message was not sent.';

		echo 'Mailer error: ' . $mail->ErrorInfo;

		} else {

		echo 'Message has been sent.';
		}
	}
?>