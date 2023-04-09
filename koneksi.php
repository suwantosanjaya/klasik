<?php
    $dbServer = "";
    $dbUsername = "";
    $dbPassword = "";
    $dbName = "";

    $connString = "mysql:host=".$dbServer.";dbname=".$dbName;
    $conn = new PDO($connString, $dbUsername, $dbPassword);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>