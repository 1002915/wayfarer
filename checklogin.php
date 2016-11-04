<?php
// Start session and set posted data to variables.
session_start();
include('connection.php');

$email_post = $_POST['email_post']; 
$password_post = $_POST['password']; 
$sql = "SELECT * FROM user WHERE email = '$email_post'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_row($result);

// Create Variables from the data grabbed from the database.
$id = $row[0];
$first_name = $row[1];
$last_name = $row[2];
$user_name = $row[3];
$email = $row[4];
$user_level = $row[5];
$password = $row[6];

// If the password the user entered matches the password in the database, set the useable data to the sessions for easy use of information.
if (password_verify($password_post, $password)) 
{    
	$_SESSION['id'] = $id;
	$_SESSION['first_name'] = $first_name;
	$_SESSION['last_name'] = $last_name;
	$_SESSION['user_name'] = $user_name;
	$_SESSION['email'] = $email;
	$_SESSION['user_level'] = $user_level;
    header('Location: index.php');
} 
// If the password doesn't match, do the following:
else 
{
	$_SESSION['errors'] = array("Your username or password was incorrect.");
	//header('Location: login.php');
    echo 'Invalid password for ' . $email . ' Please try again. <a href="login.php">BACK</a>';	
}

?>