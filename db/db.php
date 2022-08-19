<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "belma";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }