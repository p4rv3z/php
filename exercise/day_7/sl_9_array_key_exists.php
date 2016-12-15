<?php
echo "<h2>Array Key exists</h2><hr>";

$v_one = array("a"=>"alpha","b"=>"bita","c"=>"color","y"=>"yellow","z"=>"alpha");
if(array_key_exists('b',$v_one)||array_key_exists(7,$v_one)){
	echo "Key is already exists.<br>";
}else{
	echo "Key is not exists.<br>";
}
echo "<h2>Array Key</h2><hr>";
//$keys = array_keys($v_one);//print all keys
$keys = array_keys($v_one,"alpha");// print spacific values of keys

print "<pre>";
print_r($keys);
print "</pre>";
?>