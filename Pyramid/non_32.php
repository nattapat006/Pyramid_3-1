<?php
include("font.php");
for($non=5;$non>=1;$non--)
{
	for($n=7;$n>=(6-$non);$n--)
	{
	echo (8-$n);
	}
	for($n=7;$n>=($non);$n--)
	{
	echo("*");
	}
	echo(8-$non);
	echo "<br>";
}
?>