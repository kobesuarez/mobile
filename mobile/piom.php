<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/vote.css">
    <title>Document</title>
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
        <div class="drop">

        </div>
    </div><br>
</body>

</html>
<?php
include('connection.php');
session_start();

$countquery = "SELECT * FROM candidate WHERE candidateposition = 'Public Information Officer - Male'";
$countres = mysqli_query($conn, $countquery);
while ($getrow = mysqli_fetch_array($countres)) {
    $cname = $getrow["candidatename"];
    $cpos = $getrow["candidateposition"];
    $cpartylist = $getrow["candidatepartylist"];
    echo '<div class="row pb-3 ml-3">
            <div class="col-5 card text-center" style="width: 18rem;">
                <img src="/src/currentpartylist/President.jpg" class="card-img-top py-3 rounded-circle" alt="...">
                <div class="card-body py-0 px-0">
                    <p class="card-text">' . $cname . '</p>
                    <p class="text-secondary">' . $cpos . '</p>
                    <p class="text-secondary">' . $cpartylist . '</p>
                </div>
            </div>
        </div>';
}

if (!isset($_SESSION['votedpiom'])) {
    $votingstatus = $_SESSION['votedpiom'];
    if ($votingstatus == 0) {
        echo '<button type="submit" name="submit">Vote</button>';
    } else {
        echo '<button type="button" name="submit" disabled>Already Voted</button>';
    }
} else {
    echo '<button type="button" name="submit" disabled>Disabled</button>';
}
?>