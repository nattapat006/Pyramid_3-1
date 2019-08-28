<?php
include("font.php");
for($non=1;$non<=5;$non++){
            echo ("*");
            for($n=1;$n<$non;$n++){
               echo ("&nbsp;&nbsp;");
            }
            for($n=$non;$n<=5*2-$non;$n++){
                echo ($non);
            }
            for($n=$non;$n>1;$n--){
              echo ("&nbsp;&nbsp;");
              
            }
            echo ("*");
           echo "<br>";
        }
?>