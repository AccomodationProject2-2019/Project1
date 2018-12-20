<?php
require_once 'connect.php';
session_start();
ob_start();
if(isset($_SESSION['username'])) {
	?>

<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
</head>
<body>
	<button>
		<a href="index.php">Home</a>
	</button>

	<button>
		<a href="logout.php">Logout</a>
	</button>
	<h3>Welcome <?php echo $_SESSION['username']; ?></h3>
	<p>Upload Houses to let</p>
	<form action="uploads.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="location" placeholder="Where is house located" required="required">
		<p></p>
		<input type="number" name="rooms" placeholder="Number of tenants needed" required="required">
		<p></p>
		<input type="number" name="rent" placeholder="Rent per person" required="required"><br>
		<small>Enter a number only. No dollar sign</small>
		<p></p>
		<textarea name="description" cols="18" rows="5" placeholder="Marketing Features e.g Free wifi"></textarea>
		<p></p>
		<input type="file" name="filename" required="required">
		<input type="submit" name="subfile" size="1000" value="Add This House">
	</form>

	<h3>My houses</h3>
	<?php display($_SESSION['user_id']); ?>
</body>
</html>
<?php
}
else
{
	header("location: login.php");
}

function display($user_id){
	global $dbc;
	// this function can be improved by use of joins
	$id = mysqli_real_escape_string($dbc,$user_id);
	$sql = "SELECT location,house_id FROM houses WHERE user_id = '$id'";
	$r = mysqli_query($dbc,$sql) OR die("Could not connect to database: ".mysqli_error($dbc));
	if($r){
		if (mysqli_num_rows($r) == 0) {
			echo "<p>You have uploaded not pictures as yet</p>";
		}
		else
		{
			$houses = array();
			while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
			{
				$houses[] = $row;
			}
			$num_houses = count($houses);
			for ($i=0; $i < $num_houses; $i++)
			{ 
				$hid = $houses[$i]['house_id'];	
				$qry = "SELECT img_name FROM houses WHERE house_id = '$hid'";
				$result = mysqli_query($dbc,$qry) OR die("Could not coonnect: ".mysqli_error($dbc));
				if ($result) {
					// get house images
					while ($rows = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
						echo '<img width="20%" height="25%" src="uploads/'.$rows['img_name'].'">';	
					}
				}
				else
				{
					// error
					$_SESSION['message'] = "<p>Something went wrong</p>";
					header("location: error.php");
				}
			}
		}

	}
	else
	{
		// error page
	}
	 
}