<?php
    if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
        $description = $_POST['desc'];
    }
    $to = "dilpreet1851990@gmail.com";
	$subject = "Received Mail from Portfolio";
	$txt = "HELLO"  ."\r\n". "Someone tried reaching your details are as follows"."\r\n".$email."\r\n".$description."";
    $headers = "From:".$email."";
    mail($to,$subject,$txt,$headers);
	 echo '<script type="text/javascript">
		alert("Thank you for your interest. Our experts will contact you soon.");
		location="../index.html";
		</script>';
?>
