<?php

include ("../functions/adminFunctions.php");
if ($_SESSION['auth']) {
    if ($_SESSION['is_admin'] != 1) {
        redirect('../index.php', 'You\'re not authorized to access this page!');
    } else {
        redirect('../login.php', 'Login to continue!');
    }
} else {
    redirect('../login.php', 'Login to continue!');
}

?>