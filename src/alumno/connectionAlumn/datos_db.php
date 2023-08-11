<?php
session_start();

$Id = ($_SESSION["alum"]["id_ud"]);



require_once($_SERVER["DOCUMENT_ROOT"] . "/src/connection.php");

$query = "select
*
from
usuarios_datos 
inner join alumno_materia  on
 alumno_materia.alumno_id  = usuarios_datos.id_ud 
 inner join materias on
 materias.id_materia = alumno_materia.materia_id 
 where usuarios_datos.id_ud = '$Id'

 ";

$stmt = $conn->query($query);
$resultadoCompleto = [];

$fila = $stmt->fetch_assoc();

// while ($fila = $stmt->fetch_assoc()) {
//     $resultadoCompleto [] = $fila;



// // session_start();
// // $_SESSION["clases"]=$resultadoCompleto;
// }

var_dump($fila["dni"]);


 
// header("Location:\src\alumno\clases.php ");
