<?php
echo "<h2>In array</h2><hr>";
$value = array("Parvez","Papan","Sudip","Rony");
$check = "Sudip";
if(in_array($check,$value)){
	echo "$check is exists.";
}else{
	echo "$check is not exists.";
}
echo "<h2>Array ksort</h2><hr>";
ksort($value);
print_r($value);
echo "<h2>Array krsort</h2><hr>";
krsort($value);
print_r($value);
echo "<h2>Array Current position key</h2><hr>";
echo "Current position key: ".key($value);

echo "<h2>Array Shuffle /Random </h2><hr>";
shuffle($value);
print_r($value);
?>