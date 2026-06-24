<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "mcr_db";
    $con = new mysqli($server, $user, $pass, $dbname);
    if ($con) {
        echo "Connection Successful";
    } else {
        echo "Connection Failed";
    }
?>
