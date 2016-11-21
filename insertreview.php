<?php
include('connection.php');
include('functions.php');
 //SET INPUT TO VARIABLES 
$reviewtitle = e($_POST['review-name']);
$reviewcontent = e($_POST['user-review']);
$reviewby = e($_POST['id']);
$last_row = mysqli_insert_id($mysqli);
$today = date("F j, Y, g:i a");
$rating = e($_POST['rating']);

// check to see if the post needs to be draft or not.
if(!isset($_POST['r-draft']))
{
    $isdraft = 0;
}
else
{
    $isdraft = e($_POST['r-draft']);
}

//Create the insert variable that takes the user submitted data, so it can be passed to the mysqli query function.
$sql = "INSERT  INTO review (R_TITLE, R_CONTENT, R_BY, R_DRAFT, R_RATING) 
                VALUES ('$reviewtitle', '$reviewcontent', '$reviewby', '$isdraft', '$rating')";

// If the user is created successfully, set variables for email confirmation, grab email template and send to user.
if(mysqli_query($mysqli, $sql)) 
{
    echo "<span style='color:#009900; font-size:0.9em;'>Success!</span>";

} 
else {
    
    http_response_code(404);
}

mysqli_close($mysqli);

?>



