<?php
include("font.php");
for($non=1;$non<=5;$non++)
{
	echo ($non);
	for($n=1;$n<=($non);$n++)
	{
	echo ("&nbsp;");
	}
	for($n=1;$n<=($non);$n++)
	{
	echo ("*");
	}
	echo "<br>";
}
?>
