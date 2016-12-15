<?php
session_start();
$_SESSION['username'] = "Parvez";
$_SESSION['password'] = "12345";
if(isset($_SESSION['username'])){
	echo "Welcome ".$_SESSION['username']."<br>";
}else{
	echo "Please log in.";
}
//session_unset($_SESSION['username']);//unset spacific seassion or for logout
session_destroy();//unset all seassion
?>