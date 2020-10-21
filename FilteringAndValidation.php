<?php

//-------------    checking valid Email and sanitize
if(isset($_POST["Email"]))
{
	
	$email=$_POST["Email"];
	// this is sanitizing
	$email=filter_var($email,FILTER_SANITIZE_EMAIL);
	
	
	// this is chacking email validation 
	if(filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		echo $email." this is valid email<hr>";
	}
	else
	{
		echo $email."this is invalid email<hr>";
	}
	
	
	
}


//-------------    checking valid digits
if(isset($_POST["Number"]))
{
	$Number =$_POST["Number"];
	$options = array(
	'options' => array(
	'min_range' => 100,
	'max_range' => 500,
	)
	);
	if (filter_var($Number,FILTER_VALIDATE_INT, $options)) 
	{
		echo "this Number '$Number' is considered valid . <br />";
	} 
	else 
	{
		echo "this Number '$Number' is considered invalid number must be between 100 and 500. <br />";
	}

}






?>




<form action="FilteringAndValidation.php" method="post">
email <input type="text" name="Email"><br>
Number <input type="text" name="Number"><br>

<input type="submit" value="submit" name="submit">
	
</form>

