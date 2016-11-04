<?php
include('connection.php');
 //SET INPUT TO VARIABLES 
$name = $_POST['name'];
$currency = $_POST['currency'];
$language = $_POST['language'];
$coordinates = $_POST['coordinates'];
$last_row = mysqli_insert_id($mysqli);


$sql = "INSERT INTO country (country_name, currency, language, country_coordinates) 

        VALUES ('$name', '$currency', '$language', '$coordinates')";

        if ($mysqli->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $mysqli->error;
}$mysqli->close();

?>



