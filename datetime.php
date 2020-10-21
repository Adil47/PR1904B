<?php
date_default_timezone_set("asia/karachi");

echo date("l, d M, Y , h:i a")."<br>";
echo date("Y/m/d")."<br>";
echo date("Y.m.d")."<br>";
echo date("Y-m-d")."<br>";


//If the timezone is not specified, all date //functions
//will print the date and time of the UTC +00 //timezone
date_default_timezone_set("America/New_York");
$format = "l d-m-Y h:i:s a";
//strtotime can be used to get current UNIX timestamp
$datetime = date($format, strtotime("now"));
echo "The current date and time is $datetime <br />" ;
//Can be used to get a timestamp ahead of time
$datetime = date($format, strtotime("+12 hours"));
echo "After 12 hours it will be $datetime <br />" ;
// Can be used to get a past timestamp
$datetime = date($format, strtotime("-1 week"));
echo "The Date and Time last week was $datetime <br />" ;
// Can be used to get a custom date ahead of time
$datetime = date($format, strtotime("+3 week 1 days 5 hours 3 seconds"));
echo "The resultant Date Time is $datetime <br />" ;
// Can also be used to get a next specific Day of week
$datetime = date($format, strtotime("next Monday"));
echo "The next Monday is on $datetime <br />" ;
$datetime = date($format, strtotime("next Sunday"));
echo "The next relieving Sunday is on $datetime <br />" ;



date_default_timezone_set("America/New_York");
$date=strtotime("July 04 00:00:00");
$cDate = strtotime("now");
$days=ceil(($date-$cDate)/60/60/24);
$hours=ceil(($date-$cDate)/60/24) %24;
$seconds=ceil(($date-$cDate)/24) % 60;
echo "There are $days days $hours hours and $seconds
seconds left till " . date("l d-m-Y h:i:s a",$date);






?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
