<?php
    // $servername = "localhost";
    // $username = "root";
    // $password = "root";
    // $db_name = "food_db";
    // $port = 3307;

    // $conn = new PDO("mysql:host=$servername;dbname=$db_name;port=$port", $username, $password);

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db_name = "food_db";
    $conn = new mysqli($servername, $username, $password, $db_name, 3307);

    if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
    }
    echo "";
?>