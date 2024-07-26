<?php

include './functions/userFunctions.php';
include './checkLogin.php';
include './includes/header.php';
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Determine which module to load using 'target' parameter
$target = isset($_GET['target']) ? $_GET['target'] : 'dashboard';

// Define the path to the module
switch ($target) {
    case 'dashboard':
        $modulePath = 'modules/dashboard.php';
        break;
    case 'products':
        $modulePath = 'modules/products.php';
        break;
    case 'users':
        $modulePath = 'modules/users.php';
        break;
    case 'maintenance':
        $modulePath = 'modules/maintenance.php';
        break;
    case 'pricing':
        $modulePath = 'modules/pricing.php';
        break;
    case 'user_settings':
        $modulePath = 'modules/user_settings.php';
        break;
    case '404':
        $modulePath = 'modules/404.php';
        break;
    case '500':
        $modulePath = 'modules/500.php';
        break;
    default:
        $modulePath = 'modules/404.php';
        break;
}

// Check if the module file exists, if not load 404
if (file_exists($modulePath)) {
    include $modulePath;
} else {
    include 'modules/404.php';
}

// Include footer
include './includes/footer.php';
?>