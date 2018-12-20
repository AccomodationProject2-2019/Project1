<?php
require_once 'connect.php';
//
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signin']) ) {
	//initialize values to use
	$u = $e = $p = $h = "";
	//trimm all incoming values.
	$trimmed = array_map('trim',$_POST);
	// validate data. Name first
	if (!preg_match('/^[A-Z \'.]{2,20}$/i', $trimmed['username'])) {
		$u = false;
	}
	else{
		$u = mysqli_real_escape_string($dbc,$trimmed['username']);
	}
	// email

	if (filter_var($trimmed['email'],FILTER_VALIDATE_EMAIL)) {
		$e = mysqli_real_escape_string($dbc,$trimmed['email']); 
		// check if email account exists.
		$sql = "SELECT username FROM users WHERE email='$e'";
		$r = mysqli_query($dbc,$sql) OR die("Could connect to database: ".mysqli_error($dbc));
		if ($r) { // query went through
			if (mysqli_num_rows($r) > 0) { //account already exists.
				$e = false;
			}
		}
	}
	else
	{
		$e = false;
	}
	// passwords
	if ($trimmed['password'] == $trimmed['cpassword']) {
		$p = $trimmed['password'];
		$p = mysqli_real_escape_string($dbc,password_hash($p, PASSWORD_BCRYPT));
		$h = mysqli_real_escape_string($dbc,md5( rand(0,1000) ) );

	}
	else
	{
		$p = false;
	}

	// check whether any of the values have a false.
	if ($e == false || $u == false || $p == false || $h == false) {
		$_SESSION['message'] = "<p>Your account was not created.</p>";
		header("Location: error.php");
	}
	else
	{
		$sql = "INSERT INTO users (username,email,pass,hash)
		VALUES ('$u','$e','$p','$h')";
		$r = mysqli_query($dbc,$sql) OR die("Could not register account: ".mysqli_error($dbc));
		if ($r) { // successfully ran
			$_SESSION['email'] = $e;
			$_SESSION['username'] = $u ;
			$_SESSION['user_level'] = 0;
			$message = "Thank you for creating an account with us. Please click the link below to activate your account.
				If you do not recognise this activity do not click the link.
				link http:www.something.co.zw/signin.php?email=".$e."&hash=".$h;
			$to = $e;
			$subject = "Account Activation (Rent_a_House)";
			mail($to, $subject, $message);
			header("Location: login.html");
		}
		else
		{
			$_SESSION['message'] = "<p>Your account was not created.</p>";
			header("Location: error.php");
		}
	}
}
elseif($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['email']) )
{
	//validate data
	if (filter_var($_GET['email'],FILTER_VALIDATE_EMAIL)) {
		$e = $_GET['email'];
		$e = mysqli_real_escape_string($dbc,$e);
		$h = $_GET['hash'];
		$h = mysqli_real_escape_string($dbc,$h);
		$sql = "SELECT hash FROM users WHERE email='$e'";
		$r = mysqli_query($dbc,$sql)OR die("Could not use database: ".mysqli_error($dbc));
		if ($r) { //success
			if (mysqli_num_rows($r) > 0) {
				// email exists.
				$row = mysqli_fetch_array($r,MYSQLI_ASSOC);
				//compare hash values
				if ($row['hash'] == $h) { // verify account
					$qry = "UPDATE users SET active = 1 WHERE email='$e'";
					$result = mysqli_query($dbc,$qry)OR die("Could not use db: ".mysql_error($dbc));
					if ($result) { // success.
						if (mysqli_num_rows($result) == 0) {
							$_SESSION['message'] = "<p>Account verified!. Please click <a href='login.html'>login</a></p>";
							header("Location: success.php");
						}
						else{
							// send message to admin something is wrong.
							header("Location: index.php");
						}
					}
					else
					{
						$_SESSION['message'] = "<p>Account not verified!. Due to a technical fault. Any inconvience caused is deeply regretted. Our developers are working on the problem</p>";
						header("Location: error.php");
					}

				}
				else
				{
					$_SESSION['message'] = "<p>Account not verified!. Link expired or account does not exist</p>";
					header("Location: error.php");					
				}
			}
			else{
				// email does not exist.
				$_SESSION['message'] = "<p>Failed to activate account</p>";
				header("Location: error.php");
			}
		}
		else
		{
			$_SESSION['message'] = "<p>Account not verified!. Due to a technical fault. Any inconvience caused is deeply regretted. Our developers are working on the problem</p>";
			header("Location: error.php");			
		}
	}
	else
	{
		// contact admin. possible hack attempt
		$_SESSION['message'] = "<p>Invalid email address entered.</p>";
		header("Location: error.php");
	}
}
else
{
	header("Location: index.php");
}
?>