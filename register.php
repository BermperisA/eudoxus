<?php

include "./dbconnect.php";
session_start();


//assign variables from the html form to new php variables
$surname = $_POST["lastname"];
$name = $_POST["firstname"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$phone = $_POST["telephone"];
$type = $_POST["type"];


$con = dbconnect();
$result = mysqli_query($con,"INSERT INTO users(username, password, usersType, name, surname, email) VALUES ('$username','$password','$type','$name','$surname','$email') ");


if($result){
    $redirect = "./index.php";
	$_SESSION["logged_user"] = $username;
	$_SESSION["logged_pass"] = $password;

}else{
	$redirect = "./failLog.php";

}
mysqli_close($con);
?>

<html>
	<head>	
	<meta HTTP-EQUIV="REFRESH" content="0; url=<?php echo $redirect;?>" />

	</head>
	<body>
	</body>
</html>
