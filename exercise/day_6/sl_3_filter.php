<?php
echo "Filter<br><hr>";
foreach(filter_list() as $id=> $filter){
	echo "$filter => ".filter_id($filter)."<br>";
}
echo "<hr>";

$int = 4.6;
$val = 50;
$min = 1;
$max = 100;
if(filter_var($int,FILTER_VALIDATE_INT)){
	//ip->FILTER_VALIDATE_IP
	//email->FILTER_VALIDATE_EMAIL
	//url->FILTER_VALIDATE_URL
	echo "Its a integer number.<br>";
}else{
	echo "Its not a integer number.<br>";
}

if(filter_var($val,FILTER_VALIDATE_INT,array("options"=>array("min_range"=>$min,"max_range"=>$max)))){
	//ip->FILTER_VALIDATE_IP
	//email->FILTER_VALIDATE_EMAIL
	//url->FILTER_VALIDATE_URL
	echo "Its a integer number and valid.<br>";
}else{
	echo "Its not a integer number or not valid.<br>";
}

?>