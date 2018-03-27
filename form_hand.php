<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['Name'];
		$email = $_POST['Facility_identifier'];
		$message = $_POST['Message'];
		//$from = 'Demo Contact Form'; 
		//$to = 'example@bootstrapbay.com'; 
		//$subject = 'Message from Contact Demo ';
		
		//$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['Name']) {
			$err = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['Facility_identifier']) {
			$err = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['Message']) {
			$err = 'Please enter your message';
		}
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage ) 

{
echo $name;
echo $message;
	
}

else
{
echo $err;
}



//{
//	if (mail ($to, $subject, $body, $from)) {
//		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
//	} else {
//		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
//	}
//}
//	}


?>


