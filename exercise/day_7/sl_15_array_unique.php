<?php
echo "<h2>Array Unique</h2><hr>";

$v_one = array("Red","Yellow","White","Green","Green","White");
print_r(array_unique($v_one));

echo "<h2>Array Unshift</h2><hr>";

$v_two = array("Red","Yellow","White","Green","Green","White");
array_unshift($v_two,"Blue");
print_r($v_two);

echo "<h2>Array Values</h2><hr>";

$v_three = array("131-15-2209"=>"Parvez","131-15-2202"=>"Papan","131-15-2210"=>"Rabbier");
print_r(array_values($v_three));

echo "<h2>Array Walk</h2><hr>";

$v_four = array("131-15-2209"=>"Parvez","131-15-2202"=>"Papan","131-15-2210"=>"Rabbier");
function student($name,$id){
	echo "Student name: $name, id: $id<br>";
}
array_walk($v_four,"student");

echo "<h2>Asort</h2><hr>";//ase by id

$v_five = array("131-15-2209"=>"Parvez","131-15-2202"=>"Papan","131-15-2210"=>"Rabbier");
asort($v_five);
print_r($v_five);

echo "<h2>Arsort</h2><hr>";//dese by id

$v_six = array("131-15-2209"=>"Parvez","131-15-2202"=>"Papan","131-15-2210"=>"Rabbier");
arsort($v_six);
print_r($v_six);

echo "<h2>Compact</h2><hr>";//dese by id

$name = "Parvez";
$id = "131-15-2209";
$department = "CSE";
$result = compact("name","id","department");
print_r($result);

echo "<h2>Array Current, End, Next, Previous</h2><hr>";

$v_seven = array("Red","Yellow","White","Green","Green","White");
echo "Current value: ".current($v_seven)."<br>";
echo "Next value: ".next($v_seven)."<br>";
echo "Current value: ".current($v_seven)."<br>";
echo "Previous value: ".prev($v_seven)."<br>";
echo "End value: ".end($v_seven)."<br>";
?>