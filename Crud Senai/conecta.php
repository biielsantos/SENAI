<?php
    $servername = "localhost";
    $database = "prova";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password, $database);
    if(!$conn){
        die(mysqli_connect_error());
    }
?>