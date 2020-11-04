<?php
$finfo =finfo_open(FILEINFO_MIME_TYPE);
//Set the output to be the files mimetype
//the glob(pattern) function returns all the filenames that match that pattern
//glob("fileinfo/*") matches all the files inside the fileinfo folder
foreach (glob("fileinfo/*") as $filename)
{
//The finfo_file function returns the mimetype as described by $finfo of the
// file described by $filename
	echo $filename . " has mimetype " . finfo_file($finfo,$filename) ."<br />";
}
?>
