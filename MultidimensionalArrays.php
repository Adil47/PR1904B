<?php

// Multidimensional Array

$Students=array();
$Students[0]=array(
	"Id"=>"101",
	"Name"=>"Ali",
	"Phone"=>"0320-9865321",
	"Email"=>"Ali@gmail.com",
	"Subjects"=>array("HTML","BootStrap","JAVA","Androi")
);
$Students[1]=array(
	"Id"=>"102",
	"Name"=>"Asad",
	"Phone"=>"0333-9887544",
	"Email"=>"Asad@gmail.com",
	"Subjects"=>array("Office","JavaScript","HTML","BootStrap","JAVA","Androi")
);
$Students[2]=array(
	"Id"=>"103",
	"Name"=>"Malik",
	"Phone"=>"0320-9865321",
	"Email"=>"Malik@gmail.com",
	"Subjects"=>array("Swift","IOS","ReactNative","AngularJs","NodeJs")
);
$Students[3]=array(
	"Id"=>"104",
	"Name"=>"Hamza",
	"Phone"=>"0320-9865321",
	"Email"=>"Hamza@gmail.com",
	"Subjects"=>array("C#","ASP.net Webform","ASP.NET MVC","Microsoft Azure")
);
?>
<table border="1">
<tr>
	<th>StudentId</th>
	<th>Name</th>
	<th>Phone</th>
	<th>Email</th>
	<th>Subjects</th>
</tr>
<?php
foreach($Students as $Student)
{
	echo "<tr>";
		echo "<td>".$Student["Id"]."</td>";
		echo "<td>".$Student["Name"]."</td>";
		echo "<td>".$Student["Phone"]."</td>";
		echo "<td>".$Student["Email"]."</td>";
		echo "<td><ul>";
			foreach($Student["Subjects"] as $s)
			{
				echo "<li>$s</li>";
			}
		echo "</ul></td>";
	echo "</tr>";
}
?>
</table>






