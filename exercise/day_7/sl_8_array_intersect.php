<?php
echo "<h2>Array Intersect</h2><hr>";

$v_one = array("a"=>"alpha","b"=>"bita","c"=>"color","y"=>"yellow");
$v_two = array("d"=>"dim","b"=>"bita","y"=>"yellow","a"=>"alpha");
$v_three = array("g"=>"alpha","c"=>"carbon","y"=>"yellow");
//$result = array_intersect($v_one,$v_two,$v_three);//match all arrays value
//$result = array_intersect_assoc($v_one,$v_two,$v_three);//match all arrays value and key
$result = array_intersect_key($v_one,$v_two,$v_three);//match all arrays key
print "<pre>";
print_r($result);
print "</pre>";
?>