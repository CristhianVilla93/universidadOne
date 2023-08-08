<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["correo"]) && isset($_POST["pass"])) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/src/connection.php");

    $correo = $_POST["correo"];
    $contra = $_POST["pass"];

    $query = "SELECT*FROM usuarios_login WHERE correo='$correo'";

    $resultado = $conn->query($query);
    // var_dump($resultado);

    if ($contra) {
        if ($resultado->num_rows === 1) { //administrador
            // Corroborar si la contraseña hasheada es igual a la ingresada por el usuario
            $resultado1 = $resultado->fetch_assoc();
            $datosID = $resultado1["datos_id"];

            $query = "select
             *
            from
        usuarios_datos
        inner join usuarios_login  on
        usuarios_login.datos_id  = usuarios_datos.id_ud
        where usuarios_datos.id_ud = '$datosID'";
            $resultado2 = $conn->query($query);
            $resultado2 = $resultado2->fetch_assoc();

            $rolID = $resultado2["rol_id"];

            if ($rolID == 1) {

                session_start();
                $_SESSION["admi"] = $resultado2;
                header("location:\src\administrador\admin.php");
            }

            if ($rolID == 2) {

                session_start();
                $_SESSION["maes"] = $resultado2;
                header("location:\src\maestro\maestro.php");
            }

            if ($rolID == 3) {

                session_start();
                $_SESSION["alum"] = $resultado2;
                header("location:\src\alumno\alumno.php");
            }
        } else {
            header("location:\src\index.php");
        }
    } else {
        header("Location:\src\index.php");
    }
}

