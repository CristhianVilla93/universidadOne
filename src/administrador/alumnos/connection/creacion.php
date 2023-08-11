<?php
  

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    var_dump($_POST);

    require("connection.php");
  
    
    $query = "INSERT INTO usuarios_datos(dni, correo, nombre, Apellido, fecha_nacimiento) VALUES ('$dni','$name','$apellido','$direccion','$date')";
    
    $resultado = $conn ->query($query);
    
   

    if ($resultado) {
        // preparo el query para traer el registro que he guardado en la
        // base de datos
        $queryUsuario = "SELECT * FROM usuarios_datos WHERE dni = '$dni'";

        // ejecuto el query
        $usuarioDB = $conn->query($queryUsuario);

        // Redirecciona al usuario al dashboard
        header("Location:/src/administrador/alumnos/read_alumnos.php");
    }


    
}?>

