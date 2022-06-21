<?php 

$userid = $_REQUEST['userid'];
$password = $_REQUEST['password'];

if($username == null || $password == null){
	echo "null username/password...";
}else{
	
	$file = fopen('user.txt', 'r');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("|", $data); 
		if($username == trim($user[0]) && $password == trim($user[1])) {
			setcookie('status', 'true', time()+3600, '/');		
			header('location: Adminhome.php?userid='.$userid);
		}	
	}

	echo "invalid username/password";
}