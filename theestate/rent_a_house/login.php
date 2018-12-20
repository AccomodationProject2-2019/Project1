<?php
ob_start();
session_start();
require_once 'connect.php';
//verify data
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signin'])) {
	// trim all data
	$trimmed = array();
	$trimmed = array_map('trim', $_POST);

	//check email.
	if (filter_var($trimmed['email'],FILTER_VALIDATE_EMAIL)) {
		//check if account exist
		$e = mysqli_real_escape_string($dbc,$trimmed['email']);
		$p = mysqli_real_escape_string($dbc,$trimmed['password']);
		$sql = "SELECT pass,username,user_id,user_level FROM users WHERE email = '$e'";
		$result = mysqli_query($dbc,$sql)OR die("Could not query database because of: ".mysqli_error($dbc));
		if($result)
		{
			if (mysqli_num_rows($result) == 0) {
				//no account
				$_SESSION['message'] = "<p>Account does not exist.</p>";
				
				header("Location: error.php");				
			}
			else{ // compare passwords
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				if (password_verify($p,$row['pass']) ){
					//success
					$_SESSION['username'] = $row['username'];
					$_SESSION['email'] = $e;
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['user_level'] = $row['user_level'];
					header("Location: profile.php");
				}
				else
				{
					// contact admin to look into this
					$_SESSION['message'] = "<p>Could not login to account.Email or password error</p> ";
					header("Location: error.php");					
				}
			}
		}
		else
		{
			// contact admin to look into this
			$_SESSION['message'] = "<p>Sorry Failed to register. A technical fault occured. Our developers are working on it, at this moment.</p>";
			header("Location: error.php");
		}
	}
	else{
		$_SESSION['message'] = "<p>Invalid email address. Please make sure email address is ok.</p>";
		header("Location: error.php");
	}
}
else
{
	header("Location: index.php");
}
?>