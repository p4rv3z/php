<?php
echo "<h2>Array POP</h2><hr>";

$v_one = array("Red","Yellow","White","Green","Green");
array_pop($v_one);
//array_push("Black");
array_push($v_one,"Black","Purpal");

print "<pre>";
print_r($v_one);
print "</pre>";
echo "<h2>Array Product</h2><hr>";
$value = array(4,2,3);
echo array_product($value);

echo "<h2>Array Replace</h2><hr>";
$v_two = array("Car","House","Table");
print_r( array_replace($v_one,$v_two));

echo "<h2>Array Reverse</h2><hr>";
$x = array("Car","House","Table");
//print_r( array_reverse($x),false);
print_r( array_reverse($x));

echo "<h2>Array Search</h2><hr>";
$search = array_search("Green",$v_one);
print_r($search);

echo "<h2>Array Shift</h2><hr>";
$v_three = array("Car","House","Table","Chair");
array_shift($v_three);
print_r($v_three);
echo "<h2>Array Slice</h2><hr>";
$v_four = array("Car","House","Table","Chair","Ball");
//print_r(array_slice($v_four,2));
//print_r(array_slice($v_four,1,3));
print_r(array_slice($v_four,-3,2));

echo "<h2>Array Sum</h2><hr>";
$v_five = array(11,55,4,2,23,10);
echo "Total: ". array_sum($v_five);
?>