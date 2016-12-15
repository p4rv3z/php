<?php
echo "http://php.net/manual/en/function.date.php"."<br>";
echo "Time/Date<br><hr>";

	echo "Date: ".date("d/m/y")."<br>";
	echo "Date: ".date("d-M-Y")."<br>";
	echo "Date: ".date("d:M:Y")."<br>";
	
	echo date_default_timezone_get()."<br>";
	echo "Time: ".date("l")."<br>";
	echo "Time: ".date("D")."<br>";
	echo "Time: ".date("h:i:s")."<br>";
	echo "Time: ".date("h:i:sa")."<br>";
	
	date_default_timezone_set("Asia/Dhaka");
	echo "Time: ".date("h:i:sa")."<br>";
	echo date_default_timezone_get()."<br>";
?>