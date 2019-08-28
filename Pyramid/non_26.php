<?php
include("font.php");
for($non=1;$non<=5;$non++)
{
	for($n=5;$n>=(($non*2)-$non);$n--)
	{
	echo ($non);
	}
	for($n=5;$n>=(6-$non);$n--)
	{
	echo ("*");
	}
	echo "<br>";
}
?>