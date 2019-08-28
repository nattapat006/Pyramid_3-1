<?php
include("font.php");
for($non=1;$non<=5;$non++)
{
	echo ($non);
	echo ("*");
	echo ($non+2);
	for($n=7;$n>=(6-$non);$n--)
	{
	echo ("*");
	}
	echo "<br>";
}
?>