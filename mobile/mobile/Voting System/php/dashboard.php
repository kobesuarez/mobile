<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['adminuser']) || !isset($_SESSION['adminpass'])) {
    header('Location: admin.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Voting System/stylesheets/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Adminitrator</title>
</head>

<body>
    <div class="topnav w-100 py-0 px-0">
        <div class="row pt-2 mt-3 g-0">
            <div class="col-1 d-flex justify-content-end">
                <img src="/src//cict.png" class="img">
            </div>
            <div class="col-9 px-0">
                <h2>Taguig City University</h1>
                    <h4>College of Information Communication and Technology Admin Portal</h3>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-center px-0">
                <div class="col-2">
                    <h3 class="adminname mx-0 my-0"><?php echo $_SESSION['adminuser']; ?></h3>
                </div>
                <div class="col-3">
                    <div class="adminlogo mx-0 my-0">
                        <img src="" alt="" class="logo">
                    </div>
                </div>
            </div>
        </div>
        <div class="row flex-row g-0">
            <ul class="d-flex justify-content-around my-0 mx-0">
                <li><a href="candidate.php">Candidates</a></li>
                <li><a href="voter.php">Voters List</a></li>
            </ul>
        </div>
    </div>
    <div class="dashboard">
        <div class="position"></div>

        <div class="candidates"></div>

        <div class="voters"></div>

        <div class="hgraph"></div>
        <div class="tally"></div>

    </div>

</body>

</html>