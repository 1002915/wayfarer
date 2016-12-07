<?php 
// Set variable from the map's 'GET method'. 
// !!If this fails, nothing will load!!!
if(isset($_GET['city']))
{
	$cityfrompost = $_GET['city'];
}
else {$cityfrompost = 'unset_city';}

// Find the city from the database that matches the above variable.
$sql = "SELECT * FROM city_data WHERE city = '$cityfrompost'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_row($result);
// Set result of the above query to variables to be echo'd out into the page.
$ID = $row[0];
$CITY = $row[1];
$LANGUAGE = $row[2];
$PASSPORT = $row[3];
$LANDMARK_ONE = $row[4];
$DESCRIPTION_ONE = $row[5];
$LANDMARK_TWO = $row[6];
$DESCRIPTION_TWO = $row[7];
$LANDMARK_THREE = $row[8];
$DESCRIPTION_THREE = $row[9];
$LANDMARK_FOUR = $row[10];
$DESCRIPTION_FOUR = $row[11];
$TIPPING = $row[12];
$PEAK_SEASON = $row[13];
$AVERAGE_BEER = $row[14];
$FOOD_ONE = $row[15];
$FOOD_TWO = $row[16];
$FOOD_THREE  = $row[17];
$TRANSPORT_ONE = $row[18];
$TRANSPORT_TWO = $row[19];
$DESCRIPTION = $row[20];
$TIMEZONE = $row[21];
?>