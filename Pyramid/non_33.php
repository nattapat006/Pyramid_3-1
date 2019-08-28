<?php
include("font.php");
   for($non=1;$non<=4;$non++){
      for($n=$non;$n<=4+1;$n++){
         echo ("&nbsp;&nbsp;");
      }
      for($n=1;$n<=$non*2-1;$n++){
         echo ("*");
      }
         echo "<br>";
      }
      for($non=1;$non<4;$non++){
         for($n=1;$n<=$non+2;$n++){
            echo ("&nbsp;&nbsp;");
         }
         for($n=$non;$n<=(4-1)*2-$non;$n++){
            echo ("*");
         }
            echo "<br>";
       }
?>
