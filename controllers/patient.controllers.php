<?php
extract($_POST);

if (strlen($patient) > 2 && !empty($date)) {
    $d = new DateTime($date);
    $new_date = $d->modify($_COOKIE['days']."days");
    $time = time();
    echo "You're appointment is on " . $new_date->format("l d F Y").$time;
} else {
    echo "Please make sure you enter valid informations";
}