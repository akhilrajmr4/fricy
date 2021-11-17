<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
	if(isset($_POST['submit']))
	{
		$to="akhi.akhilraj18@gmail.com"; 

		$Name = $_POST["name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$message1 = $_POST["message"];
		
		$message = "Name : ".$Name."\nEmail : ".$email."\nSubject : ".$subject."\nMessage: ".$message1;
		// a random hash will be necessary to send mixed content
		$separator = md5(time());

		// carriage return type (RFC)
		$eol = "\r\n";

		// main header (multipart mandatory)
		$headers = "From: name <fricy.in>" . $eol;
		$headers .= "MIME-Version: 1.0" . $eol;
		$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
		$headers .= "Content-Transfer-Encoding: 7bit" . $eol;
		$headers .= "This message from fricy website." . $eol;

		
		if(mail($to, $subject, $message, $headers))
		{
				echo "<script>
				alert('Mail sent successfully');
				window.location.href = 'index.html';
				</script>";
		}
		else
			{
				echo "<script>
				alert('something went wrong');
				window.location.href = 'index.html';
				</script>";
			}


	}
	else
	{
		echo "<script>
		alert('something went wrong');
		window.location.href = 'index.html';
		</script>";
	}
