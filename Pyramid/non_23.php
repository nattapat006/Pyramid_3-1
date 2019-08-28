<?php
include("font.php");
for($non=1;$non<=5;$non++)
{
	echo ($non);
	for($n=1;$n<=(7-$non);$n++)
	{
	echo ("*");
	}
	for($n=2;$n<=($non);$n++)
	{
	echo ("&nbsp;&nbsp;");
	}
	echo ($non);
	echo "<br>";
}
?>