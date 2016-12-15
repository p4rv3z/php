<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
</head>
<body>
<h2>REQUEST AND POST<br></h2><hr>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	<input type="email" name="email">
	<input type="submit" value="Subcribe">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$email = $_POST["email"];
	if(empty($email)){
		echo "<span style='color:red;'>User name must not be empty!!!</span>";
	}else{
		echo "<span style='color:green;'>$email subcribed.</span>";
	}
}
?>
</body>
</html>