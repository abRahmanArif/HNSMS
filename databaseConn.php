<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "hns";
$dbPort = 3306;

$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName, $dbPort);
if ($conn->connect_error) {
    die("db connect Failed");
}
