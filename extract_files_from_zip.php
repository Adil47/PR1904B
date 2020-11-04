<?php
	$zip = new ZipArchive;
	$zipFile = $zip->open('zip\test.zip');
	if ($zipFile === TRUE) 
	{
		$zip->extractTo('zip\test');
		$zip->close();
		echo "Extracted the zipfile successfully!";
	} 
	else 
	{
		echo 'Extraction failed with Error Code: ' . $zipFile;
	}
?>
