<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/connection.php");

$query = "select
        *
    from
        usuarios_datos
    inner join alumno_materia on
        alumno_materia.alumno_id = usuarios_datos.id_ud
    inner join materias on
        alumno_materia.materia_id = materias.id_materia 
    where usuarios_datos.id_ud =3;
    ";

$stmt = $conn->query($query);
$resultadoCompleto = [];
        
while ($fila = $stmt->fetch_assoc()) {
    $resultadoCompleto [] = $fila;
}

session_start();
$_SESSION["clases"]=$resultadoCompleto;
 
header("Location:\src\alumno\clases.php ");
