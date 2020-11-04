<?php



	$zip = new ZipArchive;
	$zipFile = $zip->open('zip\test.zip',ZipArchive::CREATE);

	if ($zipFile === TRUE)
	{
		$zip->addFile('operators.php','operators.php');
		$zip->addFile('grade.php','grade.php');
		
		

		$zip->close();
		echo 'add file into zip file Successfully';
	} 
	else 
	{
		echo 'Creating a zip archive failed';
	}




?>


