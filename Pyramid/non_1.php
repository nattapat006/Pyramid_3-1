<?php
include("font.php");
for($non=1;$non<=4;$non++) {
	for($n=2;$n<=0+$non;$n++) {
		echo ("&nbsp;&nbsp;");
	}
	
	for($n=$non;$n<=$non+1;$n++) {
		echo ($non);
	}
	
	for($n=1;$n<=4-$non;$n++){
		echo ("**");
	}
	
	for($n=$non;$n<=$non+1;$n++) {
		echo ($non);
	}
	
echo "<br>";
}

?>