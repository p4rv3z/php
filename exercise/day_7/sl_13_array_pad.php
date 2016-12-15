<?php
echo "<h2>Array Pad</h2><hr>";

$v_one = array("a"=>"alpha","b"=>"bita","c"=>"color","y"=>"yellow");
//$result = array_pad($v_one,3,"null");
//$result = array_pad($v_one,-7,"null");
$result = array_pad($v_one,7,"null");
print "<pre>";
print_r($result);
print "</pre>";
?>