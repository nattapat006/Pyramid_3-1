<?php
include("font.php");
for($non=1;$non<=4;$non++) {
	for($n=$non;$n<=$non;$n++) {
		echo($n);
	}
	for($n=$non;$n<=$non;$n++) {
		echo($n+4);
	}
	for($n=0;$n<=3+$non;$n++) {
		echo("*");	
	}
	echo "<br/>";
}
?>
