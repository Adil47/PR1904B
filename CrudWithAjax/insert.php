

<?php

$con=mysqli_connect("localhost","root","","studentdb");


// ---------------  Insert record  --------------------
if(isset($_POST["Name"]))
{
	
	
	$Name=mysqli_real_escape_string($con,$_POST["Name"]) ;
	$Phone=$_POST["Phone"];
	$Email=$_POST["Email"];
	
		
	
		$IsInsert=mysqli_query($con,"insert into student (Name,Phone,Email,Password,Gender,Image,Document) values ('$Name','$Phone','$Email','','','','')") or die(mysqli_error($con));

		if($IsInsert)
		{
			echo "inserted";
		}
		else
		{
			echo "Error";
		}
	
	
	
}

?>

