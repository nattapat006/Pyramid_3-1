<?php
include("font.php");
for($non=1;$non<=4;$non++)
{
	for($n=$non;$n<=$non;$n++)
	{
	echo($non);
	echo($non+1);
	echo($non+2);
	}
	for($n=1;$n<=$non+2;$n++)
	{
	echo("*");
	}
	echo "<br>";
}
?>
