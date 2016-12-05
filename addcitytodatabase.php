<?php
include('connection.php');
include('functions.php');
 //SET INPUT TO VARIABLES 
$matches = array();
$last_row = mysqli_insert_id($mysqli);

$CITY = e($_POST['CITY']);
$LANGUAGE = e($_POST['LANGUAGE']);
$PASSPORT = e($_POST['PASSPORT']);
$LANDMARK_ONE = e($_POST['LANDMARK_ONE']);
$DESCRIPTION_ONE = e($_POST['DESCRIPTION_ONE']);
$LANDMARK_TWO = e($_POST['LANDMARK_TWO']);
$DESCRIPTION_TWO = e($_POST['DESCRIPTION_TWO']);
$LANDMARK_THREE = e($_POST['LANDMARK_THREE']);
$DESCRIPTION_THREE = e($_POST['DESCRIPTION_THREE']);
$LANDMARK_FOUR = e($_POST['LANDMARK_FOUR']);
$DESCRIPTION_FOUR = e($_POST['DESCRIPTION_FOUR']);
$TIPPING = e($_POST['TIPPING']);
$PEAK_SEASON = e($_POST['PEAK_SEASON']);
$AVERAGE_BEER = e($_POST['AVERAGE_BEER']);
$FOOD_ONE = e($_POST['FOOD_ONE']);
$FOOD_TWO = e($_POST['FOOD_TWO']);
$FOOD_THREE = e($_POST['FOOD_THREE']);
$TRANSPORT_ONE = e($_POST['TRANSPORT_ONE']);
$TRANSPORT_TWO = e($_POST['TRANSPORT_TWO']);

//Check to see if the city is already registered.
$select = mysqli_query($mysqli, "SELECT `CITY` FROM `city_data` WHERE `CITY` = '".$_POST['CITY']."'") or exit(mysql_error());

if(mysqli_num_rows($select))
{
    exit("<span style='color:#cc0000; font-size:0.9em;'>Sorry, this CITY already exists.</span>");
}

//Create the insert variable that takes the user submitted data, so it can be passed to the mysqli query function.
$sql = "INSERT INTO city_data (city, language, passport, landmark_one, description_one, landmark_two, description_two, landmark_three, description_three, landmark_four, description_four, tipping, peak_season, average_beer, food_one, food_two, food_three, transport_one, transport_two) VALUES ( '$CITY', '$LANGUAGE', '$PASSPORT', '$LANDMARK_ONE', '$DESCRIPTION_ONE', '$LANDMARK_TWO', '$DESCRIPTION_TWO', '$LANDMARK_THREE', '$DESCRIPTION_THREE', '$LANDMARK_FOUR', '$DESCRIPTION_FOUR', '$TIPPING', '$PEAK_SEASON', '$AVERAGE_BEER', '$FOOD_ONE', '$FOOD_TWO', '$FOOD_THREE', '$TRANSPORT_ONE', '$TRANSPORT_TWO')";

// If the user is created successfully, set variables for email confirmation, grab email template and send to user.
if (mysqli_query($mysqli, $sql)) 
{   
    http_response_code(200);

    echo "<span style='color:#009900; font-size:0.9em;'>Success! Please check your email for your confirmation code.</span>";

} else {
    echo 'failed!';
    http_response_code(404);
}

mysqli_close($mysqli);

?>



