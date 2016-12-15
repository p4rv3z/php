<?php
echo "<h2>Multidimensional Array</h2><hr>";
$student = array(
				array("131-15-2209","131-15-2202","131-15-2204"),
				array("131-15-2210","131-15-2208","131-15-2214"),
				array("131-15-2222","131-15-2183","131-15-2207")
);
$length = count($student);
echo "Length: $length <br>";
for($i=0;$i<$length;$i++){
	$sub_length = count($student[$i]);
	for($j=0;$j<$sub_length;$j++){
		echo "Student id: ".$student[$i][$j].", ";
	}
	echo"<br>";
}
?>