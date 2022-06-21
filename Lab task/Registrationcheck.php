<?php 

$userid = $_REQUEST['id'];
$password = $_REQUEST['password'];
$email = $_REQUEST['confirmpassword'];
$name = $_REQUEST['name'];
$fname = $_REQUEST['fname'];

if($username == null || $password == null || $email == null){
	echo "null username/password/email...";
}else{
		$user = $username."|".$password."|".$email."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $user);
		if($fname == 'signup'){
			header('location: home.php');
		}else{
			header('location: login.html');			
		}

}

?>