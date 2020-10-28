<?php


$con=mysqli_connect("localhost","root","","studentdb");

?>



<table border="1">
<thead>
	<th>Stuident Id</th>
	<th>Name</th>
	<th>Phone</th>
	<th>Email</th>
	
</thead>
	<tbody >
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

			</tr>

			<?php
		}
		?>
		
		
		
	</tbody>
	
	
</table>
