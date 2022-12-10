<?php
include('connection.php');

if (isset($_POST['signup'])) {
    $sname = $_POST['fname'] . ' ' . $_POST['mname'] . ' ' . $_POST['lname'];
    $sno = $_POST['sno'];
    $smail = $_POST['smail'];
    $syear = $_POST['syear'];
    $ssection = $_POST['ssection'];
    $scno = $_POST['scno'];
    $spassword = $_POST['password'];
    $votingstatus = 0;
    $sname = mysqli_real_escape_string($conn, $sname);
    $sno = mysqli_real_escape_string($conn, $sno);
    $smail = mysqli_real_escape_string($conn, $smail);
    $syear = mysqli_real_escape_string($conn, $syear);
    $ssection = mysqli_real_escape_string($conn, $ssection);
    $scno = mysqli_real_escape_string($conn, $scno);
    $spassword = mysqli_real_escape_string($conn, $spassword);
    $insertquery = "insert into studentlist(studentname, studentnumber, studentemail, studentyear, studentsection, studentcontactnumber, studentpassword) values ('$sname', '$sno', '$smail', '$syear', '$ssection', '$scno', '$spassword')";
    $performquery = mysqli_query($conn, $insertquery);
    if ($performquery) {
        $vinsertquery = "insert into studentvote(sno, votedpres, votedvpresi, votedvprese, votedgs, votedds, votedtrea, votedaudi, votedpiom, votedpiof) values ('$sno', '$votingstatus', '$votingstatus', '$votingstatus', '$votingstatus', '$votingstatus', '$votingstatus', '$votingstatus', '$votingstatus', '$votingstatus')";
        $vperformquery = mysqli_query($conn, $vinsertquery);
        if ($vperformquery) {
            echo "form updated";
            header('Location: login.php');
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }
}
if (isset($_POST['login'])) {
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/signup.css">
    <title>Sign Up</title>
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
        <p>First Name</p>
        <input type="text" name="fname" class="signtext">
        <p>Middle Name</p>
        <input type="text" name="mname" class="signtext">
        <p>Last Name</p>
        <input type="text" name="lname" class="signtext">
        <p>Student Number</p>
        <input type="text" name="sno" class="signtext">
        <p>E-mail</p>
        <input type="email" name="smail" class="signtext">
        <p>Year</p>
        <select name="syear" id="position">
            <option value="1st Year">1st Year</option>
            <option value="2nd Year">2nd Year</option>
            <option value="3rd Year">3rd Year</option>
            <option value="4th Year">4th Year</option>
            <option value="Irregular">Irregular</option>
        </select>
        <p>Section</p>
        <input type="text" name="ssection" class="signtext">
        <p>Contact Number</p>
        <input type="text" name="scno" class="signtext">
        <p>Password</p>
        <input type="password" name="password" class="signtext">
        <p>Confirm Password</p>
        <input type="password" name="cpassword" class="signtext"><br><br>
        <div class="btns">
            <button type="submit" name='signup' class="signup">Sign Up</button>
            <div class="sep">
                <button type="submit" name='signup' class="login">Log in</button>
            </div>
        </div>
        <br><br>
    </form>
</body>

</html>