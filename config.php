<?php
    $server = "localhost";
    $user = "id20029363_calonsiswa1";
    $password = "Password.1010";
    $database = "id20029363_calonsiswa";

    $connection = mysqli_connect($server, $user, $password, $database);

    if(!$connection) {
        die("Failed to connect to database: " . mysqli_connect_error());
    }
?>