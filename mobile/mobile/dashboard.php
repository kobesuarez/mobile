<?php
include('connection.php');

$searchquery = "SELECT * FROM current";
$res = mysqli_query($conn, $searchquery);
if (mysqli_num_rows($res) == 1) {
    $data = mysqli_fetch_array($res);
    $pres = $data['pres'];
    $vpresi = $data['vpresi'];
    $vprese = $data['vprese'];
    $gensec = $data['gensec'];
    $depsec = $data['depsec'];
    $trea = $data['trea'];
    $audi = $data['audi'];
    $piom = $data['piom'];
    $piof = $data['piof'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="icon" href="favicon.ico">
    <title>Dashboard</title>
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
    </div>

    <div class="current px-4 py-3">
        <div class="row justify-content-around py-3">
            <div class="col-5 card text-center" style="width: 18rem;">
                <img src="/src/currentpartylist/President.jpg" class="card-img-top py-3 rounded-circle" alt="...">
                <div class="card-body py-0 px-0">
                    <p class="card-text"><?php echo $pres; ?></p>
                    <p class="text-secondary"><?php echo "President"; ?></p>
                </div>
            </div>
        </div>

        <div class="row justify-content-around py-3">
            <div class="col-5 card text-center" style="width: 18rem;">
                <img src="/src/currentpartylist/Vice President - Internal.jpg" class="card-img-top py-3 rounded-circle" alt="...">
                <div class="card-body py-0 px-0">
                    <p class="card-text"><?php echo $vpresi; ?></p>
                    <p class="text-secondary"><?php echo "Vice President - Internal"; ?></p>
                </div>
            </div>

            <div class="col-5 card text-center" style="width: 18rem;">
                <img src="/src/currentpartylist/Vice President - External.png" class="card-img-top py-3 rounded-circle" alt="...">
                <div class="card-body py-0 px-0">
                    <p class="card-text"><?php echo $vprese; ?></p>
                    <p class="text-secondary"><?php echo "Vice President - External"; ?></p>
                </div>
            </div>
        </div>

        <div class="row justify-content-around py-3">
            <div class="col-5 card text-center" style="width: 18rem;">
                <img src="/src/currentpartylist/General Secretary.png" class="card-img-top py-3 rounded-circle" alt="...">
                <div class="card-body py-0 px-0">
                    <p class="card-text"><?php echo $gensec; ?></p>
                    <p class="text-secondary"><?php echo "General Secretary"; ?></p>
                </div>
            </div>

            <div class="col-5 card text-center" style="width: 18rem;">
                <img src="/src/currentpartylist/Deputy Secretary.jpg" class="card-img-top py-3 rounded-circle" alt="...">
                <div class="card-body py-0 px-0">
                    <p class="card-text"><?php echo $depsec; ?></p>
                    <p class="text-secondary"><?php echo "Deputy Secretary"; ?></p>
                </div>
            </div>
        </div>

        <div class="row justify-content-around py-3">
            <div class="col-5 card text-center" style="width: 18rem;">
                <img src="/src/currentpartylist/Treasurer.jpg" class="card-img-top py-3 rounded-circle" alt="...">
                <div class="card-body py-0 px-0">
                    <p class="card-text"><?php echo $trea; ?></p>
                    <p class="text-secondary"><?php echo "Treasurer"; ?></p>
                </div>
            </div>

            <div class="col-5 card text-center" style="width: 18rem;">
                <img src="/src/currentpartylist/Auditor.jpeg" class="card-img-top py-3 rounded-circle" alt="...">
                <div class="card-body py-0 px-0">
                    <p class="card-text"><?php echo $audi; ?></p>
                    <p class="text-secondary"><?php echo "Auditor"; ?></p>
                </div>
            </div>
        </div>

        <div class="row justify-content-around py-3">
            <div class="col-5 card text-center" style="width: 18rem;">
                <img src="/src/currentpartylist/Public Information Officer - Male.JPG" class="card-img-top py-3 rounded-circle" alt="...">
                <div class="card-body py-0 px-0">
                    <p class="card-text"><?php echo $piom; ?></p>
                    <p class="text-secondary"><?php echo "Public Information Officer - Male"; ?></p>
                </div>
            </div>

            <div class="col-5 card text-center" style="width: 18rem;">
                <img src="/src/currentpartylist/Public Information Officer - Female.jpg" class="card-img-top py-3 rounded-circle" alt="...">
                <div class="card-body py-0 px-0">
                    <p class="card-text"><?php echo $piof; ?></p>
                    <p class="text-secondary"><?php echo "Public Information Officer - Female"; ?></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function popup() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>