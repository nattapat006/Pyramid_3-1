<?php
include("font.php");
for($non=1;$non<=5;$non++) {
	for($n=1;$n<=5-$non;$n++) {
	echo ("&nbsp;&nbsp;");
	}
	for($n=1;$n<=$non;$n++){
		echo ($n);
	}
	for($n=$non;$n<=$non;$n++){
		echo (6-$non);
	}
	for($n=$non;$n>=1;$n--){
		echo ($n);
	}
	echo "<br>";
}

?>