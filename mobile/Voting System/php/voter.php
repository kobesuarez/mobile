<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Voting System/stylesheets/voter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Voter</title>
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
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="candidate.php">Candidates</a></li>
            </ul>
        </div>
    </div>

    <div class="title">
        <p>

        </p>
    </div>

    </div>
    <div class="row g-0 d-flex justify-content-center">
        <div class="col-7 px-0">
            <div class="list py-3 px-3 my-3 mx-3">
                <div class="toplist">
                    <div class="row">
                        <div class="col">
                            <input type="text" placeholder="ex: xx-xxxxx" class="d-flex justify-content-start mx-3 ">
                        </div>
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-sm mx-2 px-5" id="a">Find</button>
                            <button class="btn btn-sm mx-2 px-5" id="b">Sort</button>
                        </div>
                    </div>
                </div>
                <div class="tablelist mx-2 my-3 table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Student Number</th>
                                <th>Email</th>
                                <th>Year</th>
                                <th>Section</th>
                                <th>Contact Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'connection.php';
                            $filltable = "SELECT * FROM studentlist";
                            $fill = mysqli_query($conn, $filltable);
                            while ($getrow = mysqli_fetch_array($fill)) {
                                echo '
                                <tr>
                                    <td>' . $getrow["studentname"] . '</td>
                                    <td>' . $getrow["studentnumber"] . '</td>
                                    <td>' . $getrow["studentemail"] . '</td>
                                    <td>' . $getrow["studentyear"] . '</td>
                                    <td>' . $getrow["studentsection"] . '</td>
                                    <td>' . $getrow["studentcontactnumber"] . '</td>
                                </tr>
                                ';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-2 my-3 px-0">
            <div class="vgraph"></div>
        </div>
        <div class="col-2 px-0 mx-3 my-3">
            <div class="position mb-3"></div>
            <div class="candidates mb-3"></div>
            <div class="voters mb-3"></div>
        </div>
    </div>

</body>

</html>