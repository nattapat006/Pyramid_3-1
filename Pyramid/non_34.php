<?php
include("font.php");
for($non=1;$non<=3;$non++) {
	for($n=1;$n<=3-$non;$n++) {
		
		echo ("&nbsp;&nbsp;");
	}
		echo ("*");
	for($n=2;$n<=$non;$n++){
		echo ($n);
	}
	for($n=$non;$n<=$non;$n++) {
		
		echo ($n);
	}
	for($n=$non;$n>=2;$n--){
		echo ($n);
	}
		echo ("*");
	for($n=1;$n<=3-$non;$n++) {
		
		echo ("&nbsp;&nbsp;");
	}
		echo "<br>";
}
for($non=2;$non>=1;$non--) {
	for($n=1;$n<=3-$non;$n++) {
		echo ("&nbsp;&nbsp;");
	}
	
		echo ("*");
	for($n=1;$n<=$non;$n++){
		echo ($non);
	}
	
	for($n=2;$n<=$non;$n++){
		echo ($n);
	}
		echo ("*");
	for($n=1;$n<=3-$non;$n++) {
		echo ("&nbsp;&nbsp;");
	}
	echo "<br>";
}
?>
