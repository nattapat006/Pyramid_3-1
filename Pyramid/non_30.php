<?php
include("font.php");
for($non=1;$non<=5;$non++) {
	for($n=2;$n<=$non;$n++) {
		echo ("&nbsp;");
	}
	
	for($n=0;$n<=5-$non;$n++){
		echo ("*");
	}
	for($n=0;$n<=4-$non;$n++){
		echo ("*");
	}
	for($n=$non;$n>=1;$n--) {
		echo ($n);
	}
	echo "<br>";
}
?>
