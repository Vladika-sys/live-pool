<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cakes";

$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Conectiune esuata: " . $connection->connect_error);
}
