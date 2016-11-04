<?php
include('connection.php');
 //SET INPUT TO VARIABLES 
$name = $_POST['name'];
$population = $_POST['population'];
$landmarks = $_POST['landmarks'];
$size = $_POST['size'];

$last_row = mysqli_insert_id($mysqli);


$sql = "INSERT INTO continent (name, population, landmarks, size) 

        VALUES ('$name', '$population', '$landmarks', '$size')";

        if ($mysqli->query($sql) === TRUE) {
echo "New record created successfully. click <a href='admin.php'>here</a> to go back to the admin page.";
} else {
echo "Error: " . $sql . "<br>" . $mysqli->error;
}$mysqli->close();

?>



