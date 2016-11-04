<?php 
//Load the current session and kill it - then go back to home page.
session_start();
session_destroy();
header('Location: index.php');
?>