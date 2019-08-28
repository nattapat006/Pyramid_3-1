<?php
include("font.php");
for($non=1;$non<=5;$non++) {
	for($n=2;$n<=$non;$n++) {
	echo ("&nbsp;&nbsp;");
	}
	for($n=$non;$n<=10-$non;$n++){
	echo ($n);
	}
	echo "<br>";
}
?>
