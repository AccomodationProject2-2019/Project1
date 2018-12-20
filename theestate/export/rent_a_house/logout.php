<?php
session_start();
if (isset($_SESSION['username'])) {
	session_destroy();
	session_unset($_SESSION['username']);
	session_unset($_SESSION['email']);
	session_unset($_SESSION['user_id']);
	header("location: index.php");
}
else
{
	header("location: index.php");
}
?>