<?php
include("font.php");
for($non=1;$non<=4;$non++)
{
	for($n=1;$n<=$non;$n++)
	{
		echo ("*");
	}
	for($n=$non;$n>=2;$n--)
	{
		echo ($n);
	}
	for($n=1;$n<=$non;$n++)
	{
		echo ($n);
	}
	echo "<br>";
}
?>
