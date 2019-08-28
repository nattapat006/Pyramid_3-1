<?php
include("font.php");
for($non=1;$non<=5;$non++)
{
	for($n=1;$n<=$non;$n++)
	{
	echo (($non+1)-$n);
	}
	for($n=1;$n<=(5-$non);$n++)
	{
	echo ("&nbsp;&nbsp;&nbsp;&nbsp;");
	}
	for($n=1;$n<=$non;$n++)
	{
	echo ("*");
	}
	echo "<br>";
}
?>