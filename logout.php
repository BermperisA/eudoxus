<?php

session_start();
unset($_SESSION["logged_user"]);
unset($_SESSION["logged_pass"]);
header( "Location: ./index.php" ) ;
die();
 ?>