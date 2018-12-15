<?php

$dbServername = "localhost";
$dbUsername = "semal";
$dbPassword = "";
$dbName = "Fight_Club";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}
?>