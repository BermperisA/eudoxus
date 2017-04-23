<?php


//mysqli_close($con);

function dbconnect()
{
$hostname = "localhost";
$username = "root";
$password = "root";
$db = "eudoxus";
// Connect to the database
$con = mysqli_connect($hostname,$username,$password, $db);
// Make sure we connected succesfully

if(! $con)
{
    die('Connection Failed'.mysqli_error());
}
return $con;
}



function authenticate($username, $password)
{
$con = dbconnect();

$result=mysqli_query($con,"SELECT username, password FROM users WHERE username='".$username."' AND password='".$password."'");

	$retval = false;

	if ($count = $result->num_rows){
	

		$retval = true;
	}
	mysqli_close($con);
	return $retval;
}
?>