<?php
session_start();

$name = $_REQUEST['name'];

if ($name==null)
{
    echo "please enter your name!";
}

else if(str_word_count($name)<2)
{
    echo "please enter name more than two words!";
}else if($name[0]== "0" ||$name[0]== "1"||$name[0]== "2"||$name[0]== "3"||$name[0]== "4"||$name[0]== "5"||$name[0]== "6"||$name[0]== "7"||$name[0]== "8"||$name[0]== "9")
{
    echo "Please enter letter first";
}

else
{
    echo "login success!";
}
 


?>