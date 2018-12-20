<?php
session_start();

if (isset($_SESSION['message']) && !empty($_SESSION['message'])) {
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Success Page</title>
</head>
<body>
	<button>
		<a href="index.php">Home</a>
	</button>
	<h3>Rent_a_House Thanks you</h3>
	<p></p>
	<?php
		echo $_SESSION['message'];
	?>
</body>
</html>

<?php

}
else
{
	header("Location: index.php");
}
?>