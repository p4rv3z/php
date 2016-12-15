<?php
echo "<h2>Array</h2><hr>";
$name = array("Parvez","Arfan","Rajdip","Rabbier","Sudip");
$name[5]="Rony";
$length = count($name);
echo "Array length: ".$length."<br>";
for($i=0;$i<$length;$i++){
	echo $name[$i]."<br>";
}
?>