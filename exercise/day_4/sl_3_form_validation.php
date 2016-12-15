<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
</head>
<body>
<h2>Form Validation<br></h2><hr>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
<table>
	<tr>
	<td>Name: </td>
	<td><input type="username" name="name" required='1'></td>
	</tr>
	<tr>
	<td>E-mail: </td>
	<td><input type="email" name="email" required></td>
	</tr>
	<tr>
	<td>Gender: </td>
	<td>
	<input type="radio" name="gender" value="Male">Male 
	<input type="radio" name="gender" value="Female">Female</td>
	</tr>
	<tr>
	<td>Comment: </td>
	<td><textarea name="comment" rows="5" cols="50"></textarea></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="submit" value="Submit"></td>
	</tr>
</table>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name = validation($_POST["name"]);
	$email = validation($_POST["email"]);
	$gender = validation($_POST["gender"]);
	$comment = validation($_POST["comment"]);
	
	echo "Name: ".$name."<br>";
	echo "E-mail: ".$email."<br>";
	echo "Gender: ".$gender."<br>";
	echo "Comment: ".$comment."<br>";
	
}
function validation($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
</body>
</html>