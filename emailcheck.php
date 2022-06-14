<?php
session_start();

$email = $_REQUEST['email'];

if ($email==null)
{
    echo "please enter your email!";
}

else if($email!= )
{
    echo "please enter name more than two words!";
}
{
    echo "login success!";
}
 


?>