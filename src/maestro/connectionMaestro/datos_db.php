<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/connection.php");

$query = "select
*
from
usuarios_datos
inner join maestro_materia on
maestro_materia.maestro_id = usuarios_datos.id_ud
inner join materias on
maestro_materia.materia_id = materias.id_materia 
inner join alumno_materia on
materias.id_materia = alumno_materia.materia_id 
where usuarios_datos.id_ud =2;
";

$stmt = $conn->query($query);
$resultadoCompleto2 = [];
        
while ($filas = $stmt->fetch_assoc()) {
    $resultadoCompleto2 [] = $filas;
}

session_start();
$_SESSION["materias"]=$resultadoCompleto2;
 
header("Location:\src\maestro\materias.php");
