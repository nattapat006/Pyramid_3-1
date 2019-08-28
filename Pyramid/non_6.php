<?php
include("font.php");
for($non=7;$non>=1;$non--)
{
	for($n=1;$n<=(7-$non);$n++)
	{
		echo ("&nbsp;&nbsp;");
	}
	for($n=1;$n<=$non;$n++)
	{
	echo ($n % 2);
	}
	for($n=2;$n<=$non;$n++)
	{
	echo ($n % 2);
	}
	echo "<br>";
}
?>