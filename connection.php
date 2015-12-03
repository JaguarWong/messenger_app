<?php
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "messenger_app";
    $dbport = 3306;

    $conn = new mysqli($servername, $username, $password, $database, $dbport);

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
?>