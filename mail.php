<?php include('header.php'); ?>
<br>
<br>
<?php include "./dbconnect.php";

$con = dbconnect();
$username = $_POST["username"];
$email = $_POST["email"];
$result=mysqli_query($con,"SELECT password  FROM users WHERE username='".$username."' AND email='".$email."'");

if ($count = $result->num_rows){
		$row = mysqli_fetch_row($result);
		
		if (mail($email, "Υπενθυμιση Κωδικού", $row[0])) {
		   echo "<div id=\"mail\" >Σας έχει αποσταλεί ένα ηλεκτρονικό μήνυμα με τον προσωπικό σας κωδικό.</div>";
		  } 
		

	}
	else {
		echo("<div id=\"mail\" >Δεν βρέθηκε Χρήστης με αυτό το username.</div>");
		  }
		  
mysqli_close($con);
?>







<?php include('footer.php'); ?>