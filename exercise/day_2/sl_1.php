<!DOCTYPE html>
<html>
<head>
<title>Day one</title>
</head>
<body>
<?php
$value = "Hi! I am Parvez.";
print($value);
echo "<br>";
var_dump($value);
echo "<br>";
echo "Length: ".strlen($value);
echo "<br>";
echo "Total Word: ".str_word_count($value);
echo "<br>";
echo "Reverse: ".strrev($value);
echo "<br>";
echo "Position: ".strpos($value,"a");
echo "<br>";
echo "Replace: ".str_replace("Parvez","Muhammad",$value);
?>
</body>
</html>