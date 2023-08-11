<?php
  

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    extract($_POST);

    require("connection.php");
  
    
    $query = "INSERT INTO usuarios_datos(dni, nombre, Apellido, direccion, fecha_nacimiento, rol_id) VALUES ('$dni','$name','$apellido','$direccion','$date','$rol')";
    
    $resultado = $conn ->query($query);
    
   

    if ($resultado) {
       
        $queryUsuario = "SELECT * FROM usuarios_datos WHERE dni = '$dni'";

        $usuarioDB = $conn->query($queryUsuario);

    
        header("Location:/src/administrador/alumnos/read_alumnos.php");
    }


    
}?>

