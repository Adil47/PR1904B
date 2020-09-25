<?php

if(isset($_POST["submit"]))
{
	$incomeTax=0;
	$percentage="0%";
	$salary=$_POST["Salary"];
	
	if($salary>75000)
	{
		$incomeTax=($salary/100*10);
		$percentage="10%";
	}
	else if($salary>50000)
	{
		$incomeTax=($salary/100*5);
		$percentage="5%";
	}
	
	echo "<ul>";
	echo "<li>Salary = $salary</li>";
	echo "<li>Tax Deduction ($percentage) = $incomeTax</li>";
	echo "<li>Total Salary = ".($salary-$incomeTax)."</li>";
	
	echo "</ul>";
	
	
}




?>


<form action="conditions.php" method="post">
Salary <input type="number" name="Salary"><br/>
<input type="submit" name="submit" value="Submit">
	
</form>

