<?php

session_start();
include ("../config/dbcon.php");
function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: ' . $url);
}
?>