<?php
echo "File Write<br><hr>";
//file create
if(!file_exists("new.txt")){
	$values="";
	file_put_contents ("new.txt",$values);
	echo "File created.";
	write_something();
}else{
	echo "File exists.";
	write_something();
}
//file write
function write_something(){
	$value = "Hi!<br>I am Parvez.";
	$file = fopen("new.txt","w") or die("Unable to open file!");
	fwrite($file,$value);
	fclose($file);
}


?>