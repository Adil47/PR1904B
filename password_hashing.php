<?php


//$pass="malik123";
//echo password_hash($pass,PASSWORD_DEFAULT);


$pass=$_GET["pass"];
$hshPassword='$2y$10$aeawK6MZzaZVqye5A0peEeTbwgOBBLb.JRnqAAJImwP/41rzDJ6z6';

if(password_verify($pass,$hshPassword))
{
	echo "Login seccessfully...";
}
else
{
	echo "login failed..";
}


?>




