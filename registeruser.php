<?php
include('connection.php');
include('functions.php');
 //SET INPUT TO VARIABLES 
$first_name = e($_POST['first_name']);
$last_name = e($_POST['last_name']);
$email = e($_POST['email']);
$user_name = e($_POST['user_name']);
$password = e($_POST['password']);
$matches = array();
$user_level = 1;
$last_row = mysqli_insert_id($mysqli);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$verify_hash = md5(uniqid(rand(), true));
$today = date("F j, Y, g:i a");
$phone_number = e($_POST['phone_number']);

//Check to see if the email is already registered.
$select = mysqli_query($mysqli, "SELECT `email` FROM `user` WHERE `email` = '".$_POST['email']."'") or exit(mysql_error());

if(mysqli_num_rows($select))
{
    exit("<span style='color:#cc0000; font-size:0.9em;'>Sorry, this email is already in use.</span>");
}

// Set the form details that will be sent in the confirmation email after being sanitized.
$formvars['first_name'] = Sanitize($_POST['first_name']);
$formvars['last_name'] = Sanitize($_POST['last_name']);
$formvars['email'] = Sanitize($_POST['email']);

//Create the insert variable that takes the user submitted data, so it can be passed to the mysqli query function.
$sql = "INSERT INTO user (first_name, last_name, email, user_name, password, confirmation_code, user_level, signup_date, phone_number) 
                VALUES ('$first_name', '$last_name', '$email', '$user_name', '$hashed_password', '$verify_hash', '$user_level', '$today', '$phone_number')";

// If the user is created successfully, set variables for email confirmation, grab email template and send to user.
if (mysqli_query($mysqli, $sql)) 
{

    $confirm_id = $mysqli->insert_id;
    $confirm_url = 'localhost/wayfarer/confirmreg.php?code='. $verify_hash . '&email='.$email . '&id='.$confirm_id; 
    $message = file_get_contents('email.htm');
    $message = str_replace('%first_name%', $first_name, $message);
    $message = str_replace('%register%', $confirm_url, $message);

    //Fetch PHP mailer files.
    require_once('PHPMailerAutoload.php');
    
    // Start the PHP mailer class.
    $sendmail = new PHPMailer();

    $sendmail->CharSet = 'utf-8';
    $sendmail->IsSMTP();
    $sendmail->IsHTML(true);
    $sendmail->Host = "smtp.google.com";
    $sendmail->SMTPAuth = true;     
    $sendmail->SMTPSecure = "tls";  
    $sendmail->Host = "smtp.gmail.com";
    $sendmail->Port = 587;    
    $sendmail->Username = "filmcms@gmail.com"; 
    $sendmail->Password = "filmcmspassword"; 
    $sendmail->AddReplyTo("1002915@student.sae.edu.au","Matthew Neal");
    $sendmail->Subject = "Your registration with Wayfarer";
    $sendmail->MsgHTML($message);
    $sendmail->AddAddress($formvars['email'],$formvars['first_name']);
    $sendmail->Send();

    http_response_code(200);

    echo "<span style='color:#009900; font-size:0.9em;'>Success! Please check your email for your confirmation code.</span>";

} else {
    
    http_response_code(404);
}

mysqli_close($mysqli);

?>



