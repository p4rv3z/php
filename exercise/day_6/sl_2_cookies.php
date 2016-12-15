<?php
//setcookie(name,value,expire,path,domain,secure,httponly);
if(!isset($_COOKIE['username'])){
	//after 10s cookies will remove
setcookie("username","1",time()+10,"/") or die("Cookies cant save.");
//setcookie("username","1",time()-10,"/") or die("Cookies cant save.");//clear catch
echo "First time visited.<br>";
}else{
	echo "You are old user.";
}
?>