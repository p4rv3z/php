<?php
echo "<h2>Array Combine</h2><hr>";
$id = array("131-15-2209","131-15-2202","131-15-2208");
$name = array("Parvez","Papan","Nahid");
$length = count($id);
echo "Length: $length <br>";

$combine = array_combine($id,$name);
print "<pre>";
print_r($combine);
print "</pre>";
?>