<!-- UPDATE users SET username='&username', password='&password' where id='&id' -->
<?php
include('connection.php');
session_start();

if (!isset($_SESSION['name'])) {
    header('Location: login.php');
    exit;
} else {
    $studentname = $_SESSION['name'];
    $studentyear = $_SESSION['year'];
    $studentsection = $_SESSION['section'];
    $studentcontactnumber = $_SESSION['phonenumber'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/studentsetting.css">
    <title>Settings</title>
</head>

<body>
    <div class="top">
        <div class="logo">
            <img src="/src/cict.png" class="icon">
        </div>
        <div class="name">
            <p class="schoolname">Taguig City University</p>
            <p class="webname">Computer Science Voting Portal</p>
        </div>
    </div>
    <form action="" method="session">
        <div class="mid">
            <div class="backpic">
                <div class="pic"></div>
                <div class="info">
                    <p><?php echo $studentname ?></p>
                    <p><?php echo $studentyear . "st Year" ?></p>
                    <p><?php echo $studentsection ?></p>
                </div>
            </div>
        </div>
        <div class="info2">
            <p class="header">Account</p>
            <div class="account">
                <p class="cno">Phone Number</p>
                <p class="no"><?php echo $studentcontactnumber ?></p>
            </div>
            <p class="header">Security</p>
            <div class="security">
                <p class="pword">Password</p>
                <button class="changepassword">Change password</button>
            </div>
        </div>
    </form>
</body>

</html>