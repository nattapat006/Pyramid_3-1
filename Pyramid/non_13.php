<?php
include("font.php");
for($non=1;$non<=5;$non++) {
	for($n=2;$n<=$non;$n++) {
	echo ("&nbsp;&nbsp;");
	}
	for($n=11;$n>=11;$n--){
		echo ($n-$non-$non);
	}
	for($n=10;$n>=6+$non;$n--){
		echo ($n-$non-$non);
	}
	for($n=5;$n>=1+$non;$n--){
		echo ($n-$non);
	}
	echo "<br>";
}
?>