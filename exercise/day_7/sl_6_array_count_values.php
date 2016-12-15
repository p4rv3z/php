<?php
echo "<h2>Array Count Values</h2><hr>";
$name = array("Parvez","Papan","Nahid","Parvez","Papan","Nahid","Parvez","Papan","Papan","Nahid");
$length = count($name);
echo "Length: $length <br>";
$values = array_count_values($name);
//var_dump(array_count_values($name));//return values name, count
//foreach($values as $v => $total){
//	echo "Name: $v total: $total<br>";
//}

print "<pre>";
print_r($values);
print "</pre>";
?>