<?php
include("font.php");
for($non=1;$non<=5;$non++) {
	for($n=1;$n<=5-$non;$n++) {
		echo ("*");	
	}
	
	for($n=1;$n<=$non;$n++){
		echo (6-$non);
	}
	for($n=2;$n<=$non;$n++){
		echo (6-$non);
	}
	for($n=0;$n<=5-$non;$n++) {
		echo ("*");	
	}
	echo "<br>";
}
?>