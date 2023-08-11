<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/connection.php");

$query = "select
*
from
roles
inner join usuarios_datos on
 roles.id_rol  = usuarios_datos.rol_id 
";

$stmt = $conn->query($query);
$resultadoCompleto = [];
        
while ($fila = $stmt->fetch_assoc()) {
    $resultadoCompleto [] = $fila;
}

session_start();
$_SESSION["admin_maes"]=$resultadoCompleto;
 
header("Location:/src/administrador/permisos/read_permisos.php");
