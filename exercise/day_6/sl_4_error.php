<?php
echo "Error<br><hr>";
//phpinfo();
$price=45;
//error_reporting(E_ERROR|E_WARNING|E_PARSE);
error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
if($pric){
	print "Price is 45.";
}else{
	print "Price is not 45.";
}
?>