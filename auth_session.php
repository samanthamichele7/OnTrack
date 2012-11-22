<?php
session_start();
// if session variable not set, redirect to login page
if (!isset($_SESSION['authenticated'])) {
	header('Location: http://www.ontrackrollerderby.com/login.php');
	exit;
}
?>