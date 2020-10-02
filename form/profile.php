
<?php
if($_POST["submit"])
{
	$name=$_POST["Name"];
	$Phone=$_POST["Phone"];
	$Email=$_POST["Email"];
	$Password=$_POST["Password"];
	$Gender=$_POST["Gender"];
	$Country=$_POST["Country"];
	$City=$_POST["City"];
	$Address=$_POST["Address"];
	$theme=$_POST["Theme"];
}
?>
<body bgcolor="<?php echo $theme?>">
<table border="1" style="margin:100 auto; width: 50%;text-align: center">
	<tr>
		<th>Name</th>
		<td><?php echo $name?></td>
	</tr>
	<tr>
		<th>Phone</th>
		<td><?php echo $Phone?></td>
	</tr>
	<tr>
		<th>Email</th>
		<td><?php echo $Email?></td>
	</tr>
	<tr>
		<th>Password</th>
		<td><?php echo $Password?></td>
	</tr>
	<tr>
		<th>Gender</th>
		<td><?php echo $Gender?></td>
	</tr>
	<tr>
		<th>Country</th>
		<td><?php echo $Country?></td>
	</tr>
	<tr>
		<th>City</th>
		<td><?php echo $City?></td>
	</tr>
	<tr>
		<th>Address</th>
		<td><?php echo $Address?></td>
	</tr>
	
</table>
</body>