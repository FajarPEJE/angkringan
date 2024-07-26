<?php
include ("adminFunctions.php");

if (isset($_POST['register_btn'])) {
    $nama_lengkap = mysqli_escape_string($conn, $_POST['nama_lengkap']);
    $username = mysqli_escape_string($conn, $_POST['username']);
    $password = mysqli_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_escape_string($conn, $_POST['confirm_password']);

    $check_username = "SELECT * FROM users WHERE username ='$username'";
    $check_username_run = mysqli_query($conn, $check_username);
    if (mysqli_num_rows($check_username_run) > 0) {
        redirect('../register.php', 'Username already exist!');
    } else {
        if ($password == $confirm_password) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert_query = "INSERT INTO users (nama_lengkap, username, password) VALUES ('$nama_lengkap', '$username', '$hashed_password')";
            $insert_query_run = mysqli_query($conn, $insert_query);

            if (mysqli_num_rows($insert_query_run) > 0) {
                redirect('../login.php', "Registered Successfully");
            } else {
                redirect('../register.php', 'Something went wrong');
            }
        } else {
            redirect('../register.php', 'Passwords do not match!');
        }
    }
} else if (isset($_POST['login_btn'])) {
    $username = mysqli_escape_string($conn, $_POST['username']);
    $password = mysqli_escape_string($conn, $_POST['password']);

    $login_query = "SELECT * FROM users WHERE username = '$username'";
    $login_query_run = mysqli_query($conn, $login_query);

    if (mysqli_num_rows($login_query_run) > 0) {
        $userdata = mysqli_fetch_assoc($login_query_run);
        $db_password = $userdata["password"];

        if (password_verify($password, $db_password)) {
            $_SESSION['auth'] = true;
            $user_id = $userdata['id'];
            $username_data = $userdata['username'];
            $is_admin = $userdata['is_admin'];

            $_SESSION['auth_user'] = [
                'user_id' => $user_id,
                'username' => $username_data,
            ];

            $_SESSION['is_admin'] = $is_admin;

            if ($is_admin == 1) {
                redirect('../admin/index.php', "Welcome to admin dashboard");
            } else {
                redirect('../index.php', 'Logged In Successfully');
            }
        } else {
            redirect('../login.php', 'Password do not match!');
        }

    } else {
        redirect('../login.php', 'User not found!');
    }
}

?>