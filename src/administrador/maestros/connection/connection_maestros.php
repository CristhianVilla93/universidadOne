<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/connection.php");

$query = "select
*
from
materias
inner join maestro_materia on
maestro_materia.materia_id  = materias.id_materia 
inner join usuarios_datos on
usuarios_datos.id_ud = maestro_materia.maestro_id  ";

$stmt = $conn->query($query);
$resultadoCompleto = [];
        
while ($fila = $stmt->fetch_assoc()) {
    $resultadoCompleto [] = $fila;
}

session_start();
$_SESSION["admin_maes"]=$resultadoCompleto;
 
header("Location:/src/administrador/maestros/read_maestros.php");
