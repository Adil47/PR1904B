<?php

if(isset($_POST["submit"]))
{
	$letter=strtolower( $_POST["letter"]);
	
	
	switch($letter)
	{
		case "a": echo "this is Vowel"; break;
		case "e": echo "this is Vowel"; break;
		case "i": echo "this is Vowel"; break;
		case "o": echo "this is Vowel"; break;
		case "u": echo "this is Vowel"; break;
		default:
			echo "This is Consonent";
			
	}
	
}



?>


<form action="switchCase.php" method="post">
	input letter<input type="text" name="letter"><br/>
	<input type="submit" name="submit" value="check Vowel">
</form>

