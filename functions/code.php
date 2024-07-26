<?php

include ("../functions/adminFunctions.php");

if (isset($_POST['add_product_btn'])) {
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $stock = mysqli_real_escape_string($conn, $_POST['stock']);

    $product_query = "INSERT INTO products (product_name,price,stock) VALUES ('$product_name','$price', '$stock')";
    $product_query_run = mysqli_query($conn, $product_query);

    if ($product_query_run) {
        redirect('../index.php?target=products', 'Product added successfully');
    } else {
        redirect('../index.php?target=products', 'Something went wrong');
    }
}else if (isset($_POST['update_product_btn'])) {
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $stock = mysqli_real_escape_string($conn, $_POST['stock']);

    $product_query = "INSERT INTO products (product_name,price,stock) VALUES ('$product_name','$price', '$stock')";
    $product_query_run = mysqli_query($conn, $product_query);

    if ($product_query_run) {
        redirect('../index.php?target=products', 'Product added successfully');
    } else {
        redirect('../index.php?target=products', 'Something went wrong');
    }
}else if (isset($_POST['delete_product_btn'])) {
    
}

?>