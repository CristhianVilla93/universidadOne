<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/connection.php");

if (isset($_GET["id_ud"])) {
    $id = $_GET["id_ud"];

    $sql = "DELETE FROM usuarios_datos WHERE id_ud = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location:/src/administrador/admin.php");
    }
}

$mysqli->close();


?>
