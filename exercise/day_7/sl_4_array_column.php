<?php
echo "<h2>Array Column</h2><hr>";
$student = array(
				array("id"=>"131-15-2209","name"=>"Parvez","department"=>"CSE"),
				array("id"=>"131-15-2202","name"=>"Papan","department"=>"CSE"),
				array("id"=>"131-15-2210","name"=>"Rabbier","department"=>"CSE")
);
$length = count($student);
echo "Length: $length <br>";
//$all_id = array_column($student,'name','id');
$all_id = array_column($student,'name');
print "<pre>";
print_r($all_id);
print "</pre>";
?>