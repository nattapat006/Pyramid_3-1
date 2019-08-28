<?php
include("font.php");
for($non=1;$non<=4;$non++)
{
	for($n=1;$n<=(4-$non);$n++)
	{
	echo ("&nbsp;&nbsp;");
	}
	echo ($non);
	for($n=2;$n<=$non;$n++)
	{
	echo ("**");
	}
	echo ($non);
	echo "<br>";
}
for($non=3;$non>=1;$non--)
{
	for($n=1;$n<=(4-$non);$n++)
	{
	echo ("&nbsp;&nbsp;");
	}
	echo($non);
	for($n=2;$n<=$non;$n++)
	{
	echo ("**");
	}
	echo ($non);
	echo "<br>";
}
?>