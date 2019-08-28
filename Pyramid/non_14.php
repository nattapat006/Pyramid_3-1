<?php
include("font.php");
for($non=1;$non<=5;$non++) {
	for($n=2;$n<=0+$non;$n++) {
		echo ("&nbsp;");
	}
	
	for($n=$non;$n<=$non;$n++) {
		echo($non);
	}
	
	echo($non+1);

	for($n=1;$n<=5-$non;$n++){
		echo ("&nbsp;&nbsp;");
	}
	
	for($n=$non;$n<=$non;$n++) {
		echo($non+1);
	}
	echo($non);
	echo "<br/>";
}


?>