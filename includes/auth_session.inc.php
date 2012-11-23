<?php
session_start();
ob_start();
// if session variable not set, redirect to login page
if (!isset($_SESSION['authenticated'])) {
	header('Location: http://www.ontrackrollerderby.com/login.php');
	exit;
}

// run this script only if the logout button has been clicked
if (isset($_POST['logout'])){
	//empty the $_SESSION array
	$_SESSION = array();

	//invalidate the session cookie

	if (isset($_COOKIE[session_name()])) {
		setcookie(session_name(), '', time()-86400, '/');
	}
	//end session and redirect
	session_destroy();
	header('Location: http://ontrackrollerderby.com/index.php');
	exit;
}

?>