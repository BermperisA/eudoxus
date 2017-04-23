<?php
	include "./dbconnect.php";
	
	session_start();	
	$user = $_POST["username"];
	$passwd = $_POST["password"];
	$redirect = "";
	
	if (authenticate($user, $passwd))
	{
		$redirect = "./index.php";
		$_SESSION["logged_user"] = $user;
		$_SESSION["logged_pass"] = $passwd;
		
		
		//unset($_SESSION["login_message"]);
	}
	else 
	{
		$redirect = "./failLog.php";
		$_SESSION["login_message"] = "username/password is not valid";
	}
?>			

<html>
	<head>	
	<meta HTTP-EQUIV="REFRESH" content="0; url=<?php echo $redirect;?>" />
	</head>
	<body>
	</body>
</html>
