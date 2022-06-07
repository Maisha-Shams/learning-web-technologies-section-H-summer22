<?php
      $myArray= ["maisha" , 200 , 'maisha@aiub', 3.96];
      $length = count($myArray);
      $tobeSearched = "maisha@aiub";
      for ($i = 0; $i < $length; $i++)
       {

        if($myArray[$i] == $tobeSearched)
       {
           echo "Element found ";
        
       }
       else
       {
           echo "Element not found ";
       }
       echo "<br/>";
        
       }
       

?>
