<?php
function pyramid($n)
{
      
    for ($i = 0; $i < $n; $i++)
    {
        for($j = 0; $j <= $i; $j++ )
        {
            echo "* ";
        }

        echo "<br/>";
    }


}

function numpyra($n)
{
      
    $num = 1;
  
    for ($i = 0; $i < $n; $i++)
    {
          
        for ($j = 0; $j <= $i; $j++ )
        {
            
            echo $num." ";
            $num = $num + 1;
        }
  
        echo "<br/>";
    }
}
function alphapyra($n)
{
    $num = 65;

    for ($i = 0; $i < $n; $i++)
    {

        for ($j = 0; $j <= $i; $j++ )
        {

            $ch = chr($num);
            echo $ch." ";
            $num = $num + 1;
        }
        echo "<br/>";
    }
}
  
    $n = 3;
    pyramid($n);
    numpyra($n);
    alphapyra($n);

?>