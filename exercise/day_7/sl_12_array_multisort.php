<?php
echo "<h2>Array Merge</h2><hr>";

$v_one = array("a"=>"alpha","b"=>"bita","c"=>"color","y"=>"yellow");
$v_two = array("d"=>"dim","b"=>"bita","y"=>"yellow","a"=>"alpha");
//array_multisort($v_one,$v_two);
array_multisort($v_one,SORT_ASC);
array_multisort($v_two,SORT_DESC);
print "<pre>";
print_r($v_one);
print_r($v_two);
print "</pre>";
?>