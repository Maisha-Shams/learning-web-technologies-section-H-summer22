<?php 

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if($email == null || $password == null){
	echo "null Account Number/Password...";
}else{
	
	$file = fopen('employee.txt', 'r');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("||", $data); 
		if($email == trim($user[2]) && $password == trim($user[1])) {
			setcookie('status', 'true', time()+3600, '/');
			header('location: UserHome.php?email='.$email);
		}	
	}

	echo "Invalid username/password";
}

?>