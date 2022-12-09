<?php
include 'president.php';
$imagequery = "SELECT candidatepicture from candidate DESC";
$imgq = mysqli_query($conn, $imagequery);

if (mysqli_num_rows($imgq) > 0) {
    while ($images = mysqli_fetch_assoc($imgq)) { ?>
        <img src="/src/candidate/President/<?= $images['candidatepicture'] ?>" class="card-img-top py-3 rounded-circle" alt="...">
<?php }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row pb-3 ml-3">
        <div class="col-5 card text-center" style="width: 18rem;">
            <img src="/src/candidate/President/<?= $imageurl ?>" class="card-img-top py-3 rounded-circle" alt="...">
            <div class="card-body py-0 px-0">
                <p class="card-text">' . $cname . '</p>
                <p class="text-secondary">' . $cpos . '</p>
                <p class="text-secondary">' . $cpartylist . '</p>
                <button class="btn btn-primary mb-2" type="submit" name="votepres" value="' . $cstno . '">Vote ' . $cname . ' </button>
            </div>
        </div>
    </div>
</body>

</html>