<?php
session_start();
ob_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rent_a_House</title>
</head>
<body>
	<h2>Welcome to Rent a house</h2>
	<?php
		if (isset($_SESSION['username']) ) {
			echo "
				<button>
					<a href='profile.php'>My Account</a>
				</button>".
				"
				<button>
					<a href='logout.php'>Logout</a>
				</button>";
		}
		else
		{
			echo "
				<button>
					<a href='signin.html'>Create Account?</a>
				</button>"."

				<button>
					<a href='login.html'>Login</a>
				</button>";
		}
	?>
	<!-- Search bar -->
	<form action="index.php" method="POST">
		<input type="text" name="search" placeholder="Search by location:" required="required">
		<input type="submit" name="submit-search" value="Search">

	</form>
	<!-- /Search bar -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit-search'])) {
	//validate the data
	if (!empty($_POST['search'])) {
		$s = strip_tags($_POST['search']);
		$s = trim($s);
		$s = htmlentities($s);
		$s = mysqli_real_escape_string($dbc,$s);

		//construct query 
		$qry = "SELECT location FROM houses WHERE location LIKE '%".$s."%'";
		$re = mysqli_query($dbc,$qry) OR die(mysqli_error($dbc));
		if (mysqli_num_rows($re) >= 1) {
			while ($row = mysqli_fetch_array($re,MYSQLI_ASSOC)) {
				echo "<h3>Results of the search</h3>";
				echo '<p>'.$row['location'].'</p>';
			}
		}
		else
		{
			echo "<h3>Results of the search</h3>";
			echo "<p>Not found location";
		}
	}
}
display();

function display(){
	global $dbc;
	$qry = "SELECT * FROM houses";
	$res = mysqli_query($dbc,$qry) OR die('Could not get required files: '.mysqli_error($dbc));
	if ($res) { // ran query
		// get values.
		if (mysqli_num_rows($res) == 0) {
			//no houses listed.
			echo "<p>No houses available to let</p>";
		}
		else
		{
			$houses = array();
			while ($row = mysqli_fetch_array($res,MYSQLI_ASSOC) ) {
				$houses[] = $row;
			}

			$num_houses = count($houses);
			for ($i=0; $i < $num_houses ; $i++) { 
				echo '
				<div style="display: inline;">
					<p>'.$houses[$i]['location'].'</p>
					<img width="10%" height="20%" src="uploads/'.$houses[$i]['img_name'].'">

					<h4>Description</h4>

					<p>'.$houses[$i]['description'].'</p>

					<h4>Rent</h4>

					<p>'.$houses[$i]['rent'].'</p>
				</div>
				<hr>';
			}
		}
	}
	else
	{
		//contact admin
		echo "No houses to display.";

	}
}
?>
</body>
</html>