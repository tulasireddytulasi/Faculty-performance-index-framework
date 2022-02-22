<?php
	session_start();
	$_SESSION['username'] = null;
	$_SESSION['branch'] = null;

	session_unset();
	session_destroy();
    header('Location: userlogin.php'); 
?>