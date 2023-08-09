<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/connection.php");

$query = "select
*
from
usuarios_datos
inner join alumno_materia on
alumno_materia.alumno_id = usuarios_datos.id_ud 
inner join materias on
materias.id_materia= alumno_materia.materia_id ;

    ";

$stmt = $conn->query($query);
$resultadoCompleto = [];
        
while ($fila = $stmt->fetch_assoc()) {
    $resultadoCompleto [] = $fila;
}

session_start();
$_SESSION["admin_alum"]=$resultadoCompleto;
 
header("Location:/src/administrador/alumnos/read_alumnos.php");
