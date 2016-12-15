<?php
echo "Arrays <br>";
echo "========================================<br>";
$age = array(20,21,23,22,26,25,29);
$age[7]=30;
$length = count($age);
for($i=0;$i<$length;$i++){
	echo "Age: ".$age[$i]."<br>";
}

echo "Arrays with key<br>";
echo "========================================<br>";
$name = array(
		"Parvez"=>22,
		"Arfan"=>25,
		"Sojib"=>22,
		"Amit"=>21
);
$name["Papan"] = 20;
$name["Amit"]= 22;
foreach($name as $key=>$value){
	echo "Key: ".$key." Value: ".$value."<br>";
}
echo "MultiArrays<br>";
echo "========================================<br>";
$cars = array(
		array("BMW",20,9,"Nice"),
		array("Volvo",19.5,8),
		array("Audi",15,6)
);
$car_length = count($cars);
for($i = 0; $i<$car_length;$i++){
	echo "Car Name: ".$cars[$i][0]."<br>";

	$car_details_length = count($cars[$i]);	
	echo "<ul>";
			for($j = 0; $j<$car_details_length; $j++){
			echo "<li>".$cars[$i][$j]."</li>";
		}
	echo "</ul>";
}
echo "Arrays Sorting<br>";
echo "========================================<br>";
sort($age);
for($i=0;$i<$length;$i++){
	echo "Age: ".$age[$i]."<br>";
}
echo "Arrays Reverse Sorting<br>";
echo "========================================<br>";
rsort($age);
for($i=0;$i<$length;$i++){
	echo "Age: ".$age[$i]."<br>";
}
echo "Arrays Sorting by value<br>";
echo "========================================<br>";
asort($name);
foreach($name as $key=>$value){
	echo "Key: ".$key." Value: ".$value."<br>";
}
echo "Arrays Sorting by key<br>";
echo "========================================<br>";
ksort($name);
foreach($name as $key=>$value){
	echo "Key: ".$key." Value: ".$value."<br>";
}
?>