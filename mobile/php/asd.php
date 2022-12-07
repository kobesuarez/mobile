<?php
include('connection.php');
$getnamequery = "SELECT candidatename from candidate where candidateposition = 'President'";
$getname = mysqli_query($conn, $getnamequery);
while ($getnamerow = mysqli_fetch_assoc($getname)) {
    $names[] = $getnamerow;
}
foreach ($names as $name) {
    echo '<button>' . implode($name) . '</button>';
}
