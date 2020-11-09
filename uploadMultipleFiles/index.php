





<?php

if (isset($_POST['uploads']))
{
	$uploaddir ='uploads/';

	$fileCount = count($_FILES['files']);

	for ($i=0; $i < $fileCount;$i++)
	{
		$uploadfile = $uploaddir.basename($_FILES['files']['name'][$i]);

		if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $uploadfile))
		{
			echo $_FILES['files']['name'][$i] .	" was uploaded successfully <br />";
		}
	}
}




?>



<form action="index.php" method="post" enctype="multipart/form-data">
	<input type="file" name="files[]" multiple="multiple"><br>
	<input type="submit" value="uploads" name="uploads">
	
</form>


