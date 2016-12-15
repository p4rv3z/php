<?php
echo "Conditional Statement <br>";

$a = 10;
$b = 5;
$n = 10;

if($a==10){
	echo "Condition true. value is : $a <br>";
}
if($a==11 || $b==10){
	echo "Condition true. value is : $a . <br>";
}elseif($a==10&&$b==5){
	echo "Condition true. value is : $a and $b .<br>";
}else{
	echo "Condition false. value is unknown <br>";
}

	switch($n){
	case 5:
	echo "Value is : 5 <br>";
	break;
	
	case 10:
	echo "Value is : 10 <br>";
	break;
	
	case 15:
	echo "Value is : 15 <br>";
	break;
	
	default:
	echo "Value is : $n <br>";
	break;
}

?>