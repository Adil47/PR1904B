<!-- CSS -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<?php

//error_reporting(0);

$con=mysqli_connect("localhost","root","","studentdb");
// ---------------  Insert record  --------------------
if(isset($_POST["Submit"]))
{
	
	
	$Name=$_POST["Name"];
	$Phone=$_POST["Phone"];
	$Email=$_POST["Email"];
	$Password=$_POST["Password"];
	$Gender=@$_POST["Gender"];
	
	if($_FILES["imgFile"]["size"]>1500000)
	{
		echo "<script>alert('file size must be lessthen or equal to 1.5 mb')</script>";
	}
	else
	{
		$imagePath="Uploads/StudentImages/".rand(1,999999).".png";
		if(move_uploaded_file($_FILES["imgFile"]["tmp_name"],$imagePath))
		{

		}
		else
		{
			$filePath="";
		}


		$IsInsert=mysqli_query($con,"insert into student (Name,Phone,Email,Password,Gender,Image) values ('$Name','$Phone','$Email','$Password','$Gender','$imagePath')");

		if($IsInsert)
		{
			echo "<center style='color:green'><h1>Insert Successfully</h1></center>";
		}
		else
		{
			echo "<center style='color:red'><h1>Error</h1></center>";
		}
	}
	
	
}
// ---------------  Delete record  --------------------

if(isset($_GET["delete_id"]))
{
	$id=$_GET["delete_id"];
	$isDelete=mysqli_query($con,"delete from student where StudentId='$id' ");
	if($isDelete)
	{
		?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			   Delete record successfully...
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
		<?php
	}
	else
	{
		?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
			   Error ...
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
		<?php	
	}
}
// ---------------  Edit record  --------------------
if(isset($_GET["edit_id"]))
{
	$id=$_GET["edit_id"];
	$result=mysqli_query($con,"select * from student where StudentId='$id'");
	$row=mysqli_fetch_array($result);
	
}

// ---------------  Update record  --------------------
if(isset($_POST["Update"]))
{
	$id=$_POST["StudentId"];
	$Name=$_POST["Name"];
	$Phone=$_POST["Phone"];
	$Email=$_POST["Email"];
	$Password=$_POST["Password"];
	$Gender=$_POST["Gender"];
	$imagePath="Uploads/StudentImages/".rand(1,999999).".png";
	if(move_uploaded_file($_FILES["imgFile"]["tmp_name"],$imagePath))
	{
		
	}
	else
	{
		$imagePath=$_POST["imgpath"];
	}
	
	$isUpdate=mysqli_query($con,"update student set Name='$Name', Phone='$Phone', Email='$Email',Password='$Password', Gender='$Gender',Image='$imagePath' where StudentId='$id'");
	
	
	
}















?>
<div class="container-fluid">
	<br>
	<br>
<center>
	<form action="index.php" method="post" enctype="multipart/form-data">
	<table>
	
		<input type="hidden" name="StudentId" value="<?php echo @$row[0]?>">
		<input type="hidden" name="imgpath" value="<?php echo @$row[6]?>">
		
		<tr>
			<th><lebel>Name</lebel> </th>
			<td><input type="text" name="Name" value="<?php echo @$row[1]?>"></td>
		</tr>
		<tr>
			<th>Phone</th>
			<td><input type="text" name="Phone" value="<?php echo @$row[2]?>"></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="text" name="Email" value="<?php echo @$row[3]?>"></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="text" name="Password" value="<?php echo @$row[4]?>"></td>
		</tr>
		<tr>
			<th>Gender</th>
			<td>
				<input type="radio" name="Gender" value="Male" <?php if(@$row[5]=="Male") echo 'checked' ?> > Male
				<input type="radio" name="Gender" value="Female" <?php if(@$row[5]=="Female") echo 'checked' ?>> Female
			</td>
		</tr>
		
		<tr>
			<th>Image</th>
			<td>
				<img src="<?php echo @$row[6]?>" id="profileImage" alt="" style="max-width: 200px">
				<input type="file" id="imgfile" name="imgFile" accept="image/*">
			</td>
		</tr>
		
		<tr>
			<th></th>
			<td>
				<input type="submit" name="Submit" value="Submit">
				<input type="submit" name="Update" value="Update">
				
			</td>
		</tr>
	</table>
</form>
</center>

<br>




<table class="table">
	<tr>
		<th>StudentId</th>
		<th>Image</th>
		<th>Name</th>
		
		<th>Phone</th>
		<th>Email</th>
		<th>Password</th>
		<th>Gender</th>
		<th>Action</th>
	</tr>
	<?php
	$result=mysqli_query($con,"select * from student");
	while($row=mysqli_fetch_array($result))
	{
		?>
		<tr>
			<td><?php echo $row["StudentId"] ?></td>
			<td>
				<img
				 src="<?php echo $row["6"] ?>" 
				style="height: 50px; width: 50px; border-radius: 50%; box-shadow: 5px 5px 5px black" alt="">
			</td>
			<td><?php echo $row["Name"] ?></td>
			<td><?php echo $row["Phone"] ?></td>
			<td><?php echo $row["Email"] ?></td>
			<td><?php echo $row["Password"] ?></td>
			<td><?php echo $row["Gender"] ?></td>
			<td>
				<a href="index.php?delete_id=<?php echo $row[0] ?>"><img src="Images/delete.png" width="25" alt=""></a>
			<a href="index.php?edit_id=<?php echo $row[0] ?>"><img src="Images/edit.png" width="25" alt=""></a>
			
			
			</td>
		</tr>
		
		<?php
	}
	
	?>
			
</table>
</div>








<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<script>

document.getElementById('imgfile').onchange = function (evt) {
    var tgt = evt.target || window.event.srcElement,
        files = tgt.files;
    
    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function () {
            document.getElementById('profileImage').src = fr.result;
        }
        fr.readAsDataURL(files[0]);
    }

  
}

</script>















