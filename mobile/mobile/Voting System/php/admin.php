<?php
include 'connection.php';
session_start();
if ($_POST) {
    $adminuser = $_POST['username'];
    $adminpass = $_POST['password'];

    $adminuser = mysqli_real_escape_string($conn, $adminuser);
    $adminpass = mysqli_real_escape_string($conn, $adminpass);
    $log = "SELECT * FROM admin_acc WHERE adminuser = '$adminuser' AND adminpass = '$adminpass'";
    $res = mysqli_query($conn, $log);
    if (mysqli_num_rows($res) == 1) {
        $data = mysqli_fetch_array($res);
        $acc = $data['adminuser'];
        $pass = $data['adminpass'];

        $_SESSION['adminuser'] = $acc;
        $_SESSION['adminpass'] = $pass;
        header('Location: dashboard.php');
    } else {
        echo '<script language="javascript">';
        echo 'alert("Wrong Credentials")';
        echo '</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Voting System/stylesheets/admin.css">
    <title>Administration Login</title>
</head>

<body>
    <div class="login">
        <div class="loginpanel">
            <h2 class="title">Computer Science Voting Portal</h2>
            <h3 class="collegetitle">Taguig City University</h3>
            <div class="acc">
                <form method="post" autocomplete="off">
                    <h3 class="adminlog">Admin Log in</h3>
                    <p class="stno">Admin Account</p>
                    <input type="text" name="username" id="logintext">
                    <p class="pword">Password</p>
                    <input type="password" name="password" id="password"> <br>
                    <div class="save">
                        <input type="checkbox">
                        <p>Remember Me</p>
                    </div>
                    <input type="submit" id="login" value="Log In">
                </form>

            </div>

            <p>Forgot Password</p>
        </div>
        <div class="logo">
            <img src="/src/tcu.png" class="imglogo">
        </div>
    </div>
</body>

</html>