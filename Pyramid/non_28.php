<?php
include("font.php");
for($non=1;$non<=5;$non++) {
	for($n=5;$n>=$non;$n--) {
		echo ($n);
	}
	
	for($n=1;$n<=$non;$n++) {
		echo ("*");
	}
	
	for($n=2;$n<=$non;$n++) {
		echo ("*");
	}
	for($n=$non;$n<=5;$n++) {
		echo ($n);
	}
	echo "<br>";
}
?>
