<?php
      $a=2;
      $b=5;
      $c=3;
      if($a>$b && $a>$c){
        echo $a;
      }
      else{
        if($b>$a && $b>$c){
          echo $b;
        }
        else
          echo $c;
      }

?>