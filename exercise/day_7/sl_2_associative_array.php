<?php
echo "<h2>Associative Array</h2><hr>";
$student = array(1=>"Parvez",2=>"Arfan",3=>"Rajdip",4=>"Rabbier",5=>"Sudip");
$student[6]="Rony";
$length = sizeof($student);
echo "Array length: ".$length."<br>";
foreach($student as $id=>$name){
	echo "Student id: ".$id.", name: ".$name."<br>";
}
echo "<h2>Associative Array Change key case:</h2><hr>";
$age = array("Parvez"=>24,"Arfan"=>23,"Rajdip"=>22,"Rabbier"=>29,"Sudip"=>28);
print("<pre>");
print_r(array_change_key_case($age,CASE_UPPER));
print_r(array_change_key_case($age,CASE_LOWER));
print("</pre>");
?>