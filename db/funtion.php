<?php

require "db.php";

// mostrar en cabecera el nombre de la categoria

function mostrar_servicio($conn)
{
    $stmt = $conn->prepare("SELECT * FROM belma_servicios");
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}