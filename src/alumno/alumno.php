<?php

session_start();

if (!isset($_SESSION["alum"])) {
    require("nonauthorized.php");
    die();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="/src/administrador/estilo/cuadro.css">
    <script src="/src/administrador/cuadro.js" defer></script>
    <title>Document</title>
</head>

<body>
    <section class="flex h-screen">
        <div class="flex flex-col bg-[rgba(53,58,64,255)] w-60 p-4 text-[rgba(158,164,166,255)] gap-2">

            <div class="flex  items-center content-center gap-3">
                <img class="w-7 h-7 rounded-full m-1" src="/IMG/logo3.jpg" alt="logo">
                <h1>Universidad</h1>

            </div>

            <hr>
            <div>
                <h1>Alumno</h1>
                <p><?php echo $_SESSION["alum"]["nombre"]?> <?php echo $_SESSION["alum"]["Apellido"]?></p>
            </div>
            <hr>
            <div class="flex flex-col gap-3 p-3">
                <h1 class="text-center">MENU ALUMNOS</h1>
                <a class="flex  items-center content-center gap-3" href="/src/alumno/connectionAlumn/datos_db.php"><img src="/IMG/list.svg" alt="">Ver Calificaciones</a>
                <a class="flex  items-center content-center gap-3" href="#"><img src="/IMG/maestros.svg" alt="">Administra tus tareas</a>
             
            </div>
        </div>
        <div class="w-full">
            <nav class="w-full ">
                <ul class="w-full flex justify-between p-3">
                    <li class="flex  items-center content-center gap-3"><img src="/IMG/menu.svg" alt="">Home</li>
                    <li>

                        <p class="mb-8"><?php echo $_SESSION["alum"]["nombre"]?> <?php echo $_SESSION["alum"]["Apellido"]?></p>

                        <div class="text-center" id="cuadrodesple">
                            <ul>
                                <li ><a class="flex  items-center content-center gap-3" href="#"><img src="/IMG/person-circle.svg" alt=""> <span>Perfil</span></a></li>
                            </ul>
                            <a class="flex  items-center content-center gap-3" href="/src/logout.php"><img src="/IMG/input.svg" alt=""> <span>Logout</span></a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="p-3">
                <h1>Dashboard</h1>
                <div class="p-2 border border-solid w-[800px] ">
                    <h2>Bienvenido</h2>
                    <p>Selecciona la accion que quieras realizar en las pestañas del menu de la izquierda</p>
                </div>

            </div>
        </div>
    </section>
</body>

</html>