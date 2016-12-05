<?php
// Create the Function to sanitize the user inputs
function Sanitize($str, $remove_nl = true) 
{
    $str = StripSlashes($str);
    if($remove_nl) 
    {
        $injections = array('/(\n+)/i',
            '/(\r+)/i',
            '/(\t+)/i',
            '/(%0A+)/i',
            '/(%0D+)/i',
            '/(%08+)/i',
            '/(%09+)/i'
            );

        $str = preg_replace($injections,'',$str);
    }
    return $str;
} 

//Creates the function to sanitize the input even further.
function e($text) 
{ 
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
?>