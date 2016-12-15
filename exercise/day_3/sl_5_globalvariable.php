<?php
$x = 10;
$a=11;
$b=21;
$GLOBALS['n']=2;
function a(){
	global $x;
	$a = 5;
	echo "From function a=> value is: ".$a."<br>";
	echo "From function a=> global value is: ".$x."<br>";
}
function b(){
	$GLOBALS['c']=$GLOBALS['a']+$GLOBALS['b'];
	echo "Global variable ".$GLOBALS['c']."<br>";
}
a();
b();
echo $c."<br>";
echo $n."<br>";
echo "File path: ".$_SERVER["PHP_SELF"]."<br>";
echo "Server name: ".$_SERVER["SERVER_NAME"]."<br>";
echo "Script path: ".$_SERVER["SCRIPT_NAME"]."<br>";
echo "Browser name: ".$_SERVER["HTTP_USER_AGENT"]."<br>";
echo "Ip Address: ".$_SERVER["SERVER_ADDR"]."<br>";

?>