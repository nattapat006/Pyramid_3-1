<?php
include("font.php"); 
for($non=1;$non<=7;$non++)
{
	for($n=2;$n<=$non;$n++)
	{
	echo ("&nbsp;&nbsp;");
	}
	for($n=$non;$n<=($non);$n++)
	{
	echo ($non);
	echo ($non+1);
	echo ($non+2);
	}
	for($n=1;$n<=($non+1);$n++)
	{
	echo ("*");
	}
	echo "<br>";
}
?>
