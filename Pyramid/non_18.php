<?php
include("font.php");
for($non=1;$non<=5;$non++)
{
	echo ($non);
	for($n=1;$n<=$non;$n++)
	{
	echo ("*");
	}
	echo ($non);
	for($n=1;$n<=(6-$non);$n++)
	{
	echo ("*");
	}
	echo (10-$non);
	echo "<br>";
}
?>