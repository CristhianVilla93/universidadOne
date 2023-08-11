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
$resultadoComple = [];


while ($fila = $stmt->fetch_assoc()) {
    $resultadoComple [] = $fila;
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
                <a class="flex  items-center content-center gap-3" href="/src/alumno/calificaciones.php"><img src="/IMG/list.svg" alt="">Ver Calificaciones</a>
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
                <div class="h-10 flex content-center">
                    <h1 >Calificaciones y mensajes de tus clases</h1>
                </div>
                <div>
                    <div class="flex items-center content-center justify-between py-3">
                        <h2>Calificaciones y mensajes de tus clases</h2>
                        
                    </div>

               
                    <div>

                        <div class="h-14 flex items-center content-center justify-end gap-1">
                            <label for="search">Search: </label>
                            <input class="border rounded h-10" type="text" id="search" name="" id="">
                        </div>
                       <div class="flex items-center content-center justify-center justify-items-center" >

                           <table class="border-collapse border border-slate-400">
                               <thead>
                                   <tr>
                                       <th class=" w-24 h-12 border border-slate-300">#</th>
                                       <th class="w-48 border border-slate-300">Materia</th>
                                       <th class="w-48  border border-slate-300">Darse de baja</th>
                                   </tr>
   
                               </thead>
   
                               <?php

                               

                               foreach ($resultadoComple as $resulta) {
                                
                               ?>
                                   <tbody>
   
                                       <tr>
                                           <td class="h-12 border border-slate-300 text-center"><?php echo $resulta["id_materia"]; ?></td>
                                           <td class="border border-slate-300 text-center"><?php echo $resulta["nombre_materia"]; ?></td>
                                           <td class="border border-slate-300 text-center"><?php echo $resulta["calificacion"]; ?></td>
                                           </td>
   
                                       </tr>
                                   <?php
                               }
                                   ?>
                                   </tbody>
                           </table>
                       </div>
                      
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>