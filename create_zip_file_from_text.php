<?php




if(isset($_POST["submit"]))
{
	
	$filename=$_POST["filename"];
	$content=$_POST["content"];
	
	
	$zip = new ZipArchive;
	$zipFile = $zip->open('zip\test.zip',ZipArchive::CREATE);

	if ($zipFile === TRUE)
	{
		$zip->addFromString($filename,$content);

		$zip->close();
		echo 'Zip file created Successfully';
	} 
	else 
	{
		echo 'Creating a zip archive failed';
	}
}





?>



<form action="create_zip_file.php" method="post">
	
	file name <input type="text" name="filename"><br>
	content 
	<textarea name="content" id="" cols="30" rows="10">
		
	</textarea>
	
	
	<input type="submit" name="submit" value="Create">
	
	
	
	
</form>
