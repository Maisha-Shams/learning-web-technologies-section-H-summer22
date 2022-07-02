<?php

if(isset($_COOKIE['status'])){

$email = $_REQUEST['email'];


$file = fopen('employee.txt', 'r');
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("||", $data); 
		if($email == trim($user[2])) {
			$userName = trim($user[0]);
            echo "<center><h1>Welcome, $userName </h1></center>";
		}
		break;
	}
fclose($file);

?>

<html>
<head>
	<title>Home</title>
</head>
<body>
    
	<a href="<?php echo $href = 'Profile.php?email='.$email; ?>"> Profile </a> <br/>
	<a href="Balance.php"> Balance </a><br>
	<a href="Deposit.php"> Deposit </a><br>
	<a href="Withdraw.php"> Withdraw </a><br>
	<a href="TransferMoney.html"> Transfer Money </a><br>
	<a href="TransactionHistory.php"> Transaction History </a><br>
	<a href="logout.php"> logout </a>
	
</body>
</html>

<?php 
	}else{
		echo "invalid request!";
	}
?>