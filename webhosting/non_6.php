<?php include("test_header.php"); ?>
<br><br>
<h1>&nbsp;&nbsp;&nbsp;Pyramid No.6</h1>
<table width="1024" border="0" align="center">
	<tr>
		<td width="146"><?php
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
			?></td>
		<td width="146"></td>
		<td width="146"></td>
		<td width="146"></td>
		<td width="146"></td>
		<td width="146"></td>
		<td width="146"></td>
	</tr>
</table><br>
<table width="1024" border="0" align="center">
	<tr>
		<td width="1024">
		<link type="text/css" rel="stylesheet" href="sons-of-obsidian.css" />
		<script src="run_prettify.js" defer></script>
		<?prettify linenums=true?>
			<pre class="prettyprint" style="font-size:16px;">
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
	echo "(br)"; //เปลี่ยน br ให้เป็นแท็กเปิดปิด
}
			</pre>
		</td>
	</tr>
</table>
<table align="center" border="0" width="1024">
	<tr>
		<td align="right"><a href="portpolio.php"><p><button class="w3-button w3-border w3-hover-green">To portfolio</button></p></a><br>
		</td>
	</tr>
</table>
<?php include("footer.php"); ?>
