<?php 
	session_start();
	if(!isset($_COOKIE['status'])){
		header('location: Login.html');
	}
?>

<html>
<head>
	<title>Admin Home Page</title>
</head>
<body>
	<h1>Welcome Admin!</h1> 

	<a href="profile.html"> Profile </a> |
	<a href="changepaswword.html"> Change password </a> |
	<a href="view.html"> View Users </a>
	<a href="Login.html"> Logout </a>
	
</body>
</html>
