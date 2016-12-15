<?php
echo "Implode and Explode<br><hr>";
$val = "Hi! I am Parvez.";
$val_array= array("Hi!", "I", "am", "Parvez.");
print_r(explode(" ",$val));
echo "<br>".implode(", ",$val_array);
?>