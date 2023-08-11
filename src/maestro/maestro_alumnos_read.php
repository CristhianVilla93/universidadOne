<?php


session_start();

$Id = ($_SESSION["maes"]["id_ud"]);

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/connection.php");

$query = "select
*
from
usuarios_datos 
inner join maestro_materia on
 maestro_materia.maestro_id  = usuarios_datos.id_ud 
 inner join materias on
 materias.id_materia = maestro_materia.materia_id 
 inner join alumno_materia on
 alumno_materia.materia_id  = materias.id_materia 
 where usuarios_datos.id_ud  = '$Id'

 ";

$stmt = $conn->query($query);
$resultadoComp = [];


while ($fila = $stmt->fetch_assoc()) {
    $resultadoComp [] = $fila;
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
                <h1>Maestro</h1>
                <p><?php echo $_SESSION["maes"]["correo"]?> </p>
            </div>
            <hr>
            <div class="flex flex-col gap-3 p-3">
                <h1 class="text-center">MENU MAESTROS</h1>
                <a class="flex  items-center content-center gap-3" href="/src/maestro/maestro_alumnos_read.php"><img src="/IMG/alumnos.svg" alt="">Alumnos</a>          
            </div>
        </div>
        <div class="w-full ">
            <nav class="w-full ">
                <ul class="w-full flex justify-between p-3">
                    <li class="flex  items-center content-center gap-3"><img src="/IMG/menu.svg" alt="">Home</li>
                    <li>

                        <p class="mb-8"><?php echo $_SESSION["maes"]["correo"]?></p>

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
                    <h1 >Alumnos de la clase de </h1>
                </div>
                <div>
                    <div class="flex items-center content-center justify-between py-3">
                        <h2>Alumnos de la clase de </h2>
                        
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
                                       <th class="w-48 border border-slate-300">ID de Alumno</th>
                                       <th class="w-48  border border-slate-300">Calificacion</th>
                                       <th class="w-48  border border-slate-300">Mensaje</th>
                                       <th class="w-48  border border-slate-300">Acciones</th>
                                   </tr>
   
                               </thead>
   
                               <?php

                               

                               foreach ($resultadoComp as $resulta) {
                                
                               ?>
                                   <tbody>
   
                                       <tr>
                                           <td class="h-12 border border-slate-300 text-center"><?php echo $resulta["id_am"]; ?></td>
                                           <td class="border border-slate-300 text-center"><?php echo $resulta["alumno_id"]; ?></td>
                                           <td class="border border-slate-300 text-center"><?php echo $resulta["calificacion"]; ?></td>
                                           <td class="border border-slate-300 text-center text-blue-800">No hay mensaje</td>
                                           <td class="flex gap-3 border items-center content-center justify-center justify-items-center h-12">
                                               <a href="#?id=<?= $resultados["id_ud"] ?>"><img src="/IMG/journal-plus.svg" alt=""></a>
                                               <a href="#?id_ud=<?= $resultados["id_ud"] ?>"><img src="/IMG/send-plus.svg" alt=""></a>
                                           </td>
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