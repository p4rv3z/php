<?php
echo "Exception<br><hr>";
function check($val){
	if($val==0){
		Throw new Exception("Value can't be 0.");
	}else{
		return $val;
	}
	//return true;
}
Try{
	check(0);
	echo "Your vaue is correct.<br>";
}catch(Exception $e){
	echo $e->getMessage()."<br>";
}
Try{
	$x=5;
	$y=0;
	$z=$x/$y;
	echo "$x / $y = $z <br>";
}catch(Exception $e){
	echo $e->getMessage()."<br>";
}

?>