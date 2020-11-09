<?php
$finfo =finfo_open(FILEINFO_MIME_TYPE);

echo "<ul>";
foreach (glob("crud/*/*") as $filename)
{
	
	echo "<li>".$filename . " : " . finfo_file($finfo,$filename) ."</li>";
}
echo "</ul>";

?>
