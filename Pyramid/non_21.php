<?php
include("font.php");
for($non=1;$non<=5;$non++)
{
	for($n=1;$n<=(8-$non);$n++)
	{
	echo ("*");
	}
	echo ($non);
	for($n=1;$n<=($non);$n++)
	{
	echo ("*");
	}
	echo (8-$non);
	echo "<br>";
}
?>
