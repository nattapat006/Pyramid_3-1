<?php
include("font.php");
for($non=1;$non<=5;$non++)
{
	for($n=1;$n<=$non;$n++)
	{
	echo ($non);
	}
	for($n=1;$n<=$non;$n++)
	{
	echo ("*");
	}
	for($n=1;$n<=$non;$n++)
	{
	echo ($non);
	}
	echo "<br>";
}
?>