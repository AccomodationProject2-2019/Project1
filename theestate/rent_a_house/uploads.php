<?php
/*
location has not been validated with a preg_match please review this code.
Attention!!!!!
Attention!!!!!
Attention!!!!!
Attention!!!!!
Attention!!!!!
*/
ob_start();
session_start();
require_once ('connect.php');

$u = $_SESSION['user_id'];

if(isset($_POST['subfile']))
{
	// initialize the variables
	$re = $ro = $lo = $de = $u = "";
	$u = $_SESSION['user_id'];
	$u = mysqli_real_escape_string($dbc,$u);
	//trim all incoming data
	$trimmed = array_map('trim', $_POST);
	if (is_numeric($trimmed['rent']) && is_numeric($trimmed['rooms'])) {
		$re = mysqli_real_escape_string($dbc,$trimmed['rent']);
		$ro = mysqli_real_escape_string($dbc,$trimmed['rooms']);
	}
	else
	{
		$r =false;
	}
	$de = htmlentities(strip_tags($trimmed['description']));
	$de = mysqli_real_escape_string($dbc,$de);
	$lo =htmlentities(strip_tags($trimmed['location']));
	$lo = mysqli_real_escape_string($dbc,$lo);

	$file = $_FILES['filename'];

	$file_name = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	$fileType = $file['type'];

	$fileTmpExt = explode(".", $file_name);
	$fileExt = strtolower(end($fileTmpExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf');

	if(in_array($fileExt, $allowed))
	{
		if($fileError === 0)
		{
			if($fileSize < 1000000)
			{
				$filename1 = uniqid('',true);
				$file_name = $filename1.'.'.$fileExt;
				$fileDest = 'uploads/'.$file_name;
				if(move_uploaded_file($fileTmpName, $fileDest) )
				{
					$sql = "INSERT INTO houses (user_id,img_name,rent,vacancy,description,location) 
							VALUES ('$u','$file_name','$re','$ro','$de','$lo')";
					$result = mysqli_query($dbc,$sql);
					if($result)	
					{
						if (mysqli_affected_rows($dbc) > 0) {
							$_SESSION['message'] = "Successfully updated account";
							header("location: success.php");
						}
						else
						{
							$_SESSION['message'] = "Account was not updated";
							header("location: error.php");
						}
					}
					else
					{
						// contact admin
						$_SESSION['message'] = "Failure to update due to SQL server";
						header("location: error.php");
					}
				}
				else{
					$_SESSION['message'] = "House not added to your account";
					header("location: error.php");
				}
				
			}
			else
				echo "<p>File is too big!!</p>";
		}
		else
			echo "There was an error uploading your file!";
	}
	else
	{
		echo "You cannot upload files of this type!";
	}


}
else{
	header("location: profile.php");
}

?>