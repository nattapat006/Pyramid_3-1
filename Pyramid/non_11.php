<?php
include("font.php");
for($non=1;$non<=5;$non++)
{
	for($n=1;$n<=(5-$non);$n++)
	{
	echo ("&nbsp;&nbsp;");
	}
	echo ($non);
	for($n=2;$n<=$non;$n++)
	{
	echo ("&nbsp;&nbsp;");
	}
	echo ($non);
	echo "<br>";
}
?>
