<?php
include("font.php");
for($non=1;$non<=5;$non++)
{
	echo ($non);
	for($n=1;$n<=(10-$non);$n++)
	{
	echo ("*");
	}
	for($n=2;$n<=($non);$n++)
	{
	echo ("&nbsp;&nbsp;");
	}
	echo (6-$non);
	echo "<br>";
}
?>