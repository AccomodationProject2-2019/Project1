<?php
session_start();

if (isset($_SESSION['message']) && !empty($_SESSION['message'])) {
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Error Page</title>
	
	<link rel = "stylesheet " type = "text/css" href = "LogIn-SignUp.css" media = "screen">
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
	<link href="../plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	
</head>

<body>
	<main class = "Login-SignUp-container">
		
		<div class="logo logo-LogIn">
	
			<a href="../homepage.php">
					
				<img src="../images/logo.png" alt="Guild Logo"><br />
					
				<label class = "Logo-text-align"> Guild</label>
			</a>

		</div>

		<div class = "container">
			<div class = "">	
			
				<p>We encountered the following Errors</p>
			<?php
				echo $_SESSION['message'];
			?>
			<a href='signin.html'>
				<button>
					Create account?
				</button> 
				</a>
			</div>
		</div>
	</main>
</body>
</html>

<?php

}
else
{
	header("Location: index.php");
}


?>