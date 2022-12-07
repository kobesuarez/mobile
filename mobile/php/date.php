<?php
$duedate = new DateTime('2021-12-04');
$date = new DateTimeImmutable();

echo $duedate->format('Y-m-d') . "<br>";
echo $date->format('Y-m-d') . "<br>";
if ($date == $duedate) {
    echo '<button type = "submit">vote</button>';
} else {
    echo '<button disabled>vote</button>';
}
