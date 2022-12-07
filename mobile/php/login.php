<?php
include('connection.php');

session_start();
if (isset($_POST['login'])) {
    $studentnumber = $_POST['sno'];
    $studentpass = $_POST['pword'];
    $studentnumber = mysqli_real_escape_string($conn, $studentnumber);
    $studentpass = mysqli_real_escape_string($conn, $studentpass);
    $loginquery = "SELECT * FROM studentlist WHERE studentnumber = '$studentnumber' AND studentpassword = '$studentpass'";
    $res = mysqli_query($conn, $loginquery);
    if (mysqli_num_rows($res) == 1) {
        $data = mysqli_fetch_array($res);

        $name = $data['studentname'];
        $year = $data['studentyear'];
        $section = $data['studentsection'];
        $phonenumber = $data['studentcontactnumber'];
        $votedpres = $data['votedpres'];
        $votedvpresi = $data['votedvpresi'];
        $votedvprese = $data['votedvprese'];
        $votedgs = $data['votedgs'];
        $votedds = $data['votedds'];
        $votedtrea = $data['votedtrea'];
        $votedaudi = $data['votedaudi'];
        $votedpiom = $data['votedpiom'];
        $votedpiof = $data['votedpiof'];

        $_SESSION['name'] = $name;
        $_SESSION['year'] = $year;
        $_SESSION['section'] = $section;
        $_SESSION['phonenumber'] = $phonenumber;
        $_SESSION['votedpres'] = $votedpres;
        $_SESSION['votedvpresi'] = $votedvpresi;
        $_SESSION['votedvprese'] = $votedvprese;
        $_SESSION['votedgs'] = $votedgs;
        $_SESSION['votedds'] = $votedds;
        $_SESSION['votedtrea'] = $votedtrea;
        $_SESSION['votedaudi'] = $votedaudi;
        $_SESSION['votedpiom'] = $votedpiom;
        $_SESSION['votedpiof'] = $votedpiof;

        header('Location: dashboard.php');
        exit;
    } else {
        echo '<script language="javascript">';
        echo 'alert("Wrong Credentials")';
        echo '</script>';
    }
}
if (isset($_POST['signup'])) {
    header('Location: signup.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <title>Home</title>
</head>

<body>
    <div class="top">
        <div class="logo">
            <img src="/src/cict.png" class="icon">
        </div>
        <div class="name">
            <p class="webname">Computer Science Voting Portal</p>
            <p class="schoolname">Taguig City University</p>
        </div>
    </div>
    <form method="post">
        <div class="logform">
            <p>Student number</p>
            <input type="text" name="sno" class="logtext"><br>
            <p>Password</p>
            <input type="password" name="pword" class="logtext"><br><br>
            <div class="btns">
                <button type="submit" name='login' class="login">Log In</button>
                <div class="sep">
                    <button name='signup' class="register">Register</button>
                </div>

            </div>
        </div>
    </form>
</body>

</html>