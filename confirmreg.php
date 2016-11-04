<?php
// Start session and include the connection to the database:
session_start();
include('connection.php');

//set variables from link sent in the confirmation email:
$getemailconfirm = $_GET['code'];
$idconfirm = $_GET['id'];

// Fetch line from database that matches the confirmation id (the users' details):
$sql = "SELECT * FROM user WHERE id = '$idconfirm'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_row($result);
$databasekey = $row[8];

// If the key in the database is the same as the one sent via confirmation email, set the user as a confirmed user in the database.
if ($databasekey == $getemailconfirm) 
{
	$verifiedupdate = "UPDATE user SET confirmed='1' WHERE id = '$idconfirm'";
	// Check to make sure the MYSQLI query to update the users status has been successfull, and if so, inform the user.
	if ($mysqli->query($verifiedupdate) === TRUE) 
	{
 		echo "<p>Thank you for registering. Click <a href='index.php'><span id=link>HERE</span></a> to login.</p>";
	}
} 
else 
{
	echo 'sorry, this link has expired. Please click <a href="index.php">here</a>';
}

?>