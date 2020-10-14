<!-- CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<?php
$con=mysqli_connect("localhost","root","","studentdb");
	
if(isset($_POST["Submit"]))
{
	$Name=$_POST["Name"];
	$Phone=$_POST["Phone"];
	$Email=$_POST["Email"];
	$Password=$_POST["Password"];
	$Gender=$_POST["Gender"];
	
	$IsInsert=mysqli_query($con,"insert into student (Name,Phone,Email,Password,Gender) values ('$Name','$Phone','$Email','$Password','$Gender')");
	
	if($IsInsert)
	{
		echo "<center style='color:green'><h1>Insert Successfully</h1></center>";
	}
	else
	{
		echo "<center style='color:red'><h1>Error</h1></center>";
	}
	
}
?>
<div class="container-fluid">
	

<form action="index.php" method="post">
<table>
	<tr>
		<th>Name</th>
		<td><input type="text" name="Name"></td>
	</tr>
	<tr>
		<th>Phone</th>
		<td><input type="text" name="Phone"></td>
	</tr>
	<tr>
		<th>Email</th>
		<td><input type="text" name="Email"></td>
	</tr>
	<tr>
		<th>Password</th>
		<td><input type="text" name="Password"></td>
	</tr>
	<tr>
		<th>Gender</th>
		<td>
			<input type="radio" name="Gender" value="Male"> Male
			<input type="radio" name="Gender" value="Female"> Female
		</td>
	</tr>
	<tr>
		<th></th>
		<td><input type="submit" name="Submit"></td>
	</tr>
</table>
</form>
<br>




<table class="table">
	<tr>
		<th>StudentId</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Password</th>
		<th>Gender</th>
	</tr>
	<?php
	$result=mysqli_query($con,"select * from student");
	while($row=mysqli_fetch_array($result))
	{
		?>
		<tr>
			<td><?php echo $row["StudentId"] ?></td>
			<td><?php echo $row["Name"] ?></td>
			<td><?php echo $row["Phone"] ?></td>
			<td><?php echo $row["Email"] ?></td>
			<td><?php echo $row["Password"] ?></td>
			<td><?php echo $row["Gender"] ?></td>
			
		</tr>
		
		<?php
	}
	
	?>
			
</table>
</div>









