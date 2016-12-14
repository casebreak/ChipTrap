<?php
	require_once('../PHPMailer/PHPMailerAutoload.php');
	require_once('../mail/info.php');  
	$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$to = TARGET;
	$from = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$organization = filter_var($_POST['organization'], FILTER_SANITIZE_STRING);
	$subject = SUBJECT;
	$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
	$message = "Name:   $name" . "\n" . "Email:   $from" . "\n" . "Organization:   $organization" . "\n\n" . "Sender writes... \n\n" . "$comment";
	$mail = new PHPMailer(true);  // create a new object
	try {
		$mail->ClearAddresses();
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true;  // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465; 
		$mail->Username = GUSER;  
		$mail->Password = GPWD;           
		$mail->From = $from; //Sender's email
		$mail->FromName = $name; //Sender's name
		$mail->AddReplyTo($from, $name); //Who the receiver replies to
		$mail->addAddress($to, 'Scott Duncan'); //Receiver's email and name
		$mail->Subject = $subject;
		$mail->Body = $message;
		if ($mail->send()) {
			header('Location: ../mail/success.php'); 
		} else {
			header('Location: ../mail/error.php'); 
		}
	} catch (phpmailerException $e) {
		header('Location: ../mail/error.php');
		//echo $e->errorMessage();  //uncomment for debugging
	} catch (Exception $e) {
		header('Location: ../mail/error.php');
		//echo $e->getMessage(); //uncomment for debugging
	}
?>