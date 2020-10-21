<?php


if(isset($_POST["Submit"]))
{
	$email=$_POST["Email"];
	$msg=$_POST["Message"];
	
	
	$Send=mail($email,"Aptech Pakistan",$msg);
	if($Send)
	{
		echo "<h2>send ....</h2>";
	}
	else
	{
			echo "<h2>error ....</h2>";
	}
	
}



?>

<form action="emailHandling.php" method="post">
	
	Email <input type="email" name="Email"><br>
	Message <input type="text" name="Message"><br>
	<input type="submit" name="Submit" value="Send">

</form>





<!--

-------------set this configuration in sendmail.ini file  path: xamp/sendmail/
[sendmail]
smtp_server=smtp.gmail.com
smtp_port=587
smtp_ssl=tls
error_logfile=error.log
debug_logfile=debug.log
auth_username=aptech.msg.faculty33@gmail.com
auth_password=###########
force_sender=aptech.msg.faculty33@gmail.com
hostname=localhost


-------------set this configuration in php.ini file 
[mail function]
sendmail_path =  C:\xampp\sendmail\sendmail.exe
mail.add_x_header=On


-------- Must Enable less secure app in your google account Security Settings
-->


