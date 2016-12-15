<?php
class Abc{
	public $name= "Parvez";
	private $email = "md.parvez28@gmail.com";
	
	public function info(){
		echo "Name: ".$this->name."<br>"; 
		echo "E-mail: ".$this->email."<br>"; 
	}	
}
$object  = new Abc;
echo "Name: ".$object->name."<br>";

//echo "E-mail: ".$object->email."<br>";// can't access private value

echo "====info====<br>";
$object-> info();
?>