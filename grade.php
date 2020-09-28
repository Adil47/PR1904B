<?php

if(isset($_POST["submit"]))
{
	$percentage=$_POST["p"];
	if($percentage>=80)
	{
		echo "Grade A+<br/>";
	}
	else if ($percentage>=70)
	{
		echo "Grade A<br/>";
	}
	else if ($percentage>=60)
	{
		echo "Grade B<br/>";
	}
	else if ($percentage>=50)
	{
		echo "Grade C<br/>";
	}
	else if ($percentage>=40)
	{
		echo "Grade D<br/>";
	}
	else
	{
		echo "Grade Fail<br/>";
	}
}

?>
<form action="grade.php" method="post">
	<input type="text" name="p"><br/>
	<input type="submit" name="submit" value="Submit">
	
</form>