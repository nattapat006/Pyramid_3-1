<?php
include("font.php");
for($non=1; $non <= 7; $non++) 
{
 for($n=1;$n<=7 - $non + 1;$n++)
 { 
 	echo ("&nbsp;&nbsp;");
 }
 for($n=1; $n <=$non ; $n++)
 { 
  	echo ($n); 
 }
 echo ($non);
 for($n=$non; $n >= 1 ; $n--) 
 { 
  	echo ( $n ); 
 }
 echo "<br>";
}
?>
