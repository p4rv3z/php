<?php
echo "For Loop <br>";
	for($i=0;$i<5;$i++){
		echo "Value is : $i <br> ";
	}
	echo "While Loop <br>";
	$n = 0;
	while($n<5){
		echo "Value is : $n <br> ";
		$n++;
	}
	echo "Foreach Loop <br>";
	$colors = array("Red","Blue","Yellow","Green","Black");
	foreach($colors as $color){
		echo "$color <br>";
	}
?>