<?php
$za = new ZipArchive();
$za->open('zip\test.zip');
// Opens the test.zip file //inside the zip folder
echo "Number of Files: " . $za-> numFiles . "<br />";
echo "Archive Name: " . $za-> filename . "<br />";
echo "Comment (if any): " . $za-> comment . "<br />";
for ($i=0; $i<$za->numFiles;$i++)
{

	foreach($za->statIndex($i) as $k => $v)
	{
		echo "$k : $v <br>";
		
	}
	echo "<hr>";
	
	
}
?>
