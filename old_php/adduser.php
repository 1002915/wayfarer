<?php
include('connection.php');
 //SET INPUT TO VARIABLES 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$user_level = $_POST['user_level'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$home_city = $_POST['home_city'];

$last_row = mysqli_insert_id($mysqli);


$sql = "INSERT INTO user (FIRST_NAME, LAST_NAME, USER_NAME, EMAIL, USER_LEVEL, PASSWORD, PHONE_NUMBER, HOME_CITY) 

        VALUES ('$first_name', '$last_name', '$user_name', '$email', 'user_level', 'password', 'phone_number', 'home_city')";

        if ($mysqli->query($sql) === TRUE) {
echo "New record created successfully. click <a href='admin.php'>here</a> to go back to the admin page.";
} else {
echo "Error: " . $sql . "<br>" . $mysqli->error;
}$mysqli->close();

?>



