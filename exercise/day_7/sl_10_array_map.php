<?php
echo "<h2>Array Map</h2><hr>";

$values = array(2,4,5,6,8,9,3);
function sum($value){
	return (2*$value-1);
}

$result = array_map("sum",$values);
print "<pre>";
print_r($result);
print "</pre>";
?>