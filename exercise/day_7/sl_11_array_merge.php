<?php
echo "<h2>Array Merge</h2><hr>";

$v_one = array("a"=>"alpha","b"=>"bita","c"=>"color","y"=>"yellow");
$v_two = array("d"=>"dim","b"=>"bita","y"=>"yellow","a"=>"alpha");
$result = array_merge($v_one,$v_two);
print "<pre>";
print_r($result);
print "</pre>";
?>