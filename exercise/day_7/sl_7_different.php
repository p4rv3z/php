<?php
echo "<h2>Array Different</h2><hr>";
$one = array("a","e","i","o","u");
$two = array("p","e","n");
$three = array("r","i","g","h","t");
$four = array("f","o","u","r");

//$diff = array_diff($one,$two);//$one-$two
//$diff = array_diff($one,$two,$three);//$one-$two-$three
$diff = array_diff($one,$two,$three,$four);//$one-$two-$three-$four
print "<pre>";
print_r($diff);
print "</pre>";
echo "<h2>Array Different assoc</h2><hr>";
$v_one = array("a"=>"alpha","b"=>"bita","c"=>"color");
$v_two = array("d"=>"dim","b"=>"bita","y"=>"yellow");
$v_three = array("g"=>"good","c"=>"carbon","y"=>"yellow");
//$v_diff = array_diff_assoc($v_one,$v_two,$v_three);//compire with value and key
$v_diff = array_diff_key($v_one,$v_two,$v_three);//compire with key
print "<pre>";
print_r($v_diff);
print "</pre>";
?>