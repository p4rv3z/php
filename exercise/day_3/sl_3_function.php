<?php
echo "Function <br>";
	function name(){
		echo "My name is Parvez.<br>";
	}
	function myName($name){
		echo "My name is $name.<br>";
	}
	function myNameReturn(){
		return "My name is";
	}
	function demo($name = "Parvez"){
		echo "My name is $name .<br>";
	}
	
	
	
	name();
	myName("Parvez");
	echo myNameReturn()." Parvez.<br>";
	demo("Muhammad");
	demo();
?>