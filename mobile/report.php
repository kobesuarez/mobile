<?php
    include('connection.php');
    session_start();
    $sno = $_SESSION['stno'];
    $searchquery = "SELECT * FROM studentvote where sno = '$sno'";
    $res = mysqli_query($conn, $searchquery);
    if (mysqli_num_rows($res) == 1) {
        $data = mysqli_fetch_array($res);
        $pres = $data['votedpres'];
        $vpresi = $data['votedvpresi'];
        $vprese = $data['votedvprese'];
        $gensec = $data['votedgs'];
        $depsec = $data['votedds'];
        $trea = $data['votedtrea'];
        $audi = $data['votedaudi'];
        $piom = $data['votedpiom'];
        $piof = $data['votedpiof'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/vote.css">
    <title>Report</title>
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
<div>
        <?php
        include('connection.php');
        $countquery = "SELECT * FROM candidate WHERE candidatestudentnumber = '$pres'";
        $countres = mysqli_query($conn, $countquery);
        while ($getrow = mysqli_fetch_array($countres)) {
            $cname = $getrow["candidatename"];
            $cpos = $getrow["candidateposition"];
            $cstno = $getrow["candidatestudentnumber"];
            $cpartylist = $getrow["candidatepartylist"];
            $imageurl = $getrow["candidatepicture"];
            echo    '<div class="row pb-3 ml-5 mr-0">
                    <div class="col-10 card text-center" style="width: 18rem;">
                            <img src="src/candidate/President/' . $imageurl . '" class="card-img-top py-3 rounded-circle" alt="...">
                             <div class="card-body py-0 px-0">
                                <p class="card-text">' . $cname . '</p>
                                <p class="text-secondary">' . $pres . '</p>
                                <p class="text-secondary">' . $cpos . '</p>
                                <p class="text-secondary">' . $cpartylist . '</p>
                            </div>
                        </div>
                    </div>';
        }
        ?>
    </div>

    <div>
        <?php
        include('connection.php');
        $countquery = "SELECT * FROM candidate WHERE candidatestudentnumber = '$vpresi'";
        $countres = mysqli_query($conn, $countquery);
        while ($getrow = mysqli_fetch_array($countres)) {
            $cname = $getrow["candidatename"];
            $cpos = $getrow["candidateposition"];
            $cstno = $getrow["candidatestudentnumber"];
            $cpartylist = $getrow["candidatepartylist"];
            $imageurl = $getrow["candidatepicture"];
            echo    '<div class="row pb-3 ml-5 mr-0">
                    <div class="col-10 card text-center" style="width: 18rem;">
                            <img src="src/candidate/Vice President - Internal/' . $imageurl . '" class="card-img-top py-3 rounded-circle" alt="...">
                             <div class="card-body py-0 px-0">
                                <p class="card-text">' . $cname . '</p>
                                <p class="text-secondary">' . $vpresi . '</p>
                                <p class="text-secondary">' . $cpos . '</p>
                                <p class="text-secondary">' . $cpartylist . '</p>
                                
                            </div>
                        </div>
                    </div>';
        }
        ?>
    </div>

    <div>
        <?php
        include('connection.php');
        $countquery = "SELECT * FROM candidate WHERE candidatestudentnumber = '$vprese'";
        $countres = mysqli_query($conn, $countquery);
        while ($getrow = mysqli_fetch_array($countres)) {
            $cname = $getrow["candidatename"];
            $cpos = $getrow["candidateposition"];
            $cstno = $getrow["candidatestudentnumber"];
            $cpartylist = $getrow["candidatepartylist"];
            $imageurl = $getrow["candidatepicture"];
            echo    '<div class="row pb-3 ml-5 mr-0">
                    <div class="col-10 card text-center" style="width: 18rem;">
                            <img src="src/candidate/Vice President - External/' . $imageurl . '" class="card-img-top py-3 rounded-circle" alt="...">
                             <div class="card-body py-0 px-0">
                                <p class="card-text">' . $cname . '</p>
                                <p class="text-secondary">' . $vprese . '</p>
                                <p class="text-secondary">' . $cpos . '</p>
                                <p class="text-secondary">' . $cpartylist . '</p>
                            </div>
                        </div>
                    </div>';
        }
        ?>
    </div>

    <div>
        <?php
        include('connection.php');
        $countquery = "SELECT * FROM candidate WHERE candidatestudentnumber = '$gensec'";
        $countres = mysqli_query($conn, $countquery);
        while ($getrow = mysqli_fetch_array($countres)) {
            $cname = $getrow["candidatename"];
            $cpos = $getrow["candidateposition"];
            $cstno = $getrow["candidatestudentnumber"];
            $cpartylist = $getrow["candidatepartylist"];
            $imageurl = $getrow["candidatepicture"];
            echo    '<div class="row pb-3 ml-5 mr-0">
                    <div class="col-10 card text-center" style="width: 18rem;">
                            <img src="src/candidate/General Secretary/' . $imageurl . '" class="card-img-top py-3 rounded-circle" alt="...">
                             <div class="card-body py-0 px-0">
                                <p class="card-text">' . $cname . '</p>
                                <p class="text-secondary">' . $gensec . '</p>
                                <p class="text-secondary">' . $cpos . '</p>
                                <p class="text-secondary">' . $cpartylist . '</p>
                            </div>
                        </div>
                    </div>';
        }
        ?>
    </div>
    <div>
        <?php
        include('connection.php');
        $countquery = "SELECT * FROM candidate WHERE candidatestudentnumber = '$depsec'";
        $countres = mysqli_query($conn, $countquery);
        while ($getrow = mysqli_fetch_array($countres)) {
            $cname = $getrow["candidatename"];
            $cpos = $getrow["candidateposition"];
            $cstno = $getrow["candidatestudentnumber"];
            $cpartylist = $getrow["candidatepartylist"];
            $imageurl = $getrow["candidatepicture"];
            echo    '<div class="row pb-3 ml-5 mr-0">
                    <div class="col-10 card text-center" style="width: 18rem;">
                            <img src="src/candidate/Deputy Secretary/' . $imageurl . '" class="card-img-top py-3 rounded-circle" alt="...">
                             <div class="card-body py-0 px-0">
                                <p class="card-text">' . $cname . '</p>
                                <p class="text-secondary">' . $depsec . '</p>
                                <p class="text-secondary">' . $cpos . '</p>
                                <p class="text-secondary">' . $cpartylist . '</p>
                            </div>
                        </div>
                    </div>';
        }
        ?>
    </div>
    <div>
        <?php
        include('connection.php');
        $countquery = "SELECT * FROM candidate WHERE candidatestudentnumber = '$trea'";
        $countres = mysqli_query($conn, $countquery);
        while ($getrow = mysqli_fetch_array($countres)) {
            $cname = $getrow["candidatename"];
            $cpos = $getrow["candidateposition"];
            $cstno = $getrow["candidatestudentnumber"];
            $cpartylist = $getrow["candidatepartylist"];
            $imageurl = $getrow["candidatepicture"];
            echo    '<div class="row pb-3 ml-5 mr-0">
                    <div class="col-10 card text-center" style="width: 18rem;">
                            <img src="src/candidate/Treasurer/' . $imageurl . '" class="card-img-top py-3 rounded-circle" alt="...">
                             <div class="card-body py-0 px-0">
                                <p class="card-text">' . $cname . '</p>
                                <p class="text-secondary">' . $trea . '</p>
                                <p class="text-secondary">' . $cpos . '</p>
                                <p class="text-secondary">' . $cpartylist . '</p>
                            </div>
                        </div>
                    </div>';
        }
        ?>
    </div>

    <div>
        <?php
        include('connection.php');
        $countquery = "SELECT * FROM candidate WHERE candidatestudentnumber = '$audi'";
        $countres = mysqli_query($conn, $countquery);
        while ($getrow = mysqli_fetch_array($countres)) {
            $cname = $getrow["candidatename"];
            $cpos = $getrow["candidateposition"];
            $cstno = $getrow["candidatestudentnumber"];
            $cpartylist = $getrow["candidatepartylist"];
            $imageurl = $getrow["candidatepicture"];
            echo    '<div class="row pb-3 ml-5 mr-0">
                    <div class="col-10 card text-center" style="width: 18rem;">
                            <img src="src/candidate/Auditor/' . $imageurl . '" class="card-img-top py-3 rounded-circle" alt="...">
                             <div class="card-body py-0 px-0">
                                <p class="card-text">' . $cname . '</p>
                                <p class="text-secondary">' . $audi . '</p>
                                <p class="text-secondary">' . $cpos . '</p>
                                <p class="text-secondary">' . $cpartylist . '</p>
                            </div>
                        </div>
                    </div>';
        }
        ?>
    </div>
    <div>
        <?php
        include('connection.php');
        $countquery = "SELECT * FROM candidate WHERE candidatestudentnumber = '$piom'";
        $countres = mysqli_query($conn, $countquery);
        while ($getrow = mysqli_fetch_array($countres)) {
            $cname = $getrow["candidatename"];
            $cpos = $getrow["candidateposition"];
            $cstno = $getrow["candidatestudentnumber"];
            $cpartylist = $getrow["candidatepartylist"];
            $imageurl = $getrow["candidatepicture"];
            echo    '<div class="row pb-3 ml-5 mr-0">
                    <div class="col-10 card text-center" style="width: 18rem;">
                            <img src="src/candidate/Public Information Officer - Male/' . $imageurl . '" class="card-img-top py-3 rounded-circle" alt="...">
                             <div class="card-body py-0 px-0">
                                <p class="card-text">' . $cname . '</p>
                                <p class="text-secondary">' . $piom . '</p>
                                <p class="text-secondary">' . $cpos . '</p>
                                <p class="text-secondary">' . $cpartylist . '</p>
                            </div>
                        </div>
                    </div>';
        }
        ?>
    </div>
    <div>
        <?php
        include('connection.php');
        $countquery = "SELECT * FROM candidate WHERE candidatestudentnumber = '$piof'";
        $countres = mysqli_query($conn, $countquery);
        while ($getrow = mysqli_fetch_array($countres)) {
            $cname = $getrow["candidatename"];
            $cpos = $getrow["candidateposition"];
            $cstno = $getrow["candidatestudentnumber"];
            $cpartylist = $getrow["candidatepartylist"];
            $imageurl = $getrow["candidatepicture"];
            echo    '<div class="row pb-3 ml-5 mr-0">
                    <div class="col-10 card text-center" style="width: 18rem;">
                            <img src="src/candidate/Public Information Officer - Female/' . $imageurl . '" class="card-img-top py-3 rounded-circle" alt="...">
                             <div class="card-body py-0 px-0">
                                <p class="card-text">' . $cname . '</p>
                                <p class="text-secondary">' . $piof . '</p>
                                <p class="text-secondary">' . $cpos . '</p>
                                <p class="text-secondary">' . $cpartylist . '</p>
                            </div>
                        </div>
                    </div>';
        }
        ?>
    </div>
</body>
</html>