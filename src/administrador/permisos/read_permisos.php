<?php

session_start();

$filas = ($_SESSION["admin_maes"]);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/src/administrador/estilo/cuadro.css">
    <script src="/src/administrador/cuadro.js" defer></script>
    <link href="/dist/output.css" rel="stylesheet">
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
                <h1>Admin</h1>
                <p>Administrador</p>
            </div>
            <hr>
            <div class="flex flex-col gap-3 p-3">
                <h1 class="text-center">MENU ADMINISTRACION</h1>
                <a class="flex  items-center content-center gap-3" href="/src/administrador/permisos/connection/connection_permiso.php"><img src="/IMG/permisos.svg" alt="">Permisos</a>
                <a class="flex  items-center content-center gap-3" href="/src/administrador/maestros/connection/connection_maestros.php"><img src="/IMG/maestros.svg" alt="">Maestros</a>
                <a class="flex  items-center content-center gap-3" href="/src/administrador/alumnos/connection/connection_alumnos.php"><img src="/IMG/alumnos.svg" alt="">Alumnos</a>
                <a class="flex  items-center content-center gap-3" href="/src/administrador/clases/connection/connection_clases.php"><img src="/IMG/clases.svg" alt="">Clases</a>
            </div>
        </div>
        <div class="w-full">
            <nav class="w-full ">
                <ul class="w-full flex justify-between p-3">
                    <li class="flex  items-center content-center gap-3"><img src="/IMG/menu.svg" alt="">Home</li>
                    <li>

                        <p class="mb-8">Administrador</p>

                        <div class="text-center" id="cuadrodesple">
                            <ul>
                                <li><a href="#"> <span>Home</span></a> / <a href="/src/administrador/admin.php"> <span>Dashboard</span></li>
                            </ul>
                            <a href="/src/logout.php"> <span>Logout</span></a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="p-3">
                <div class="h-10 flex content-center">
                    <h1 >Lista de Permisos</h1>
                </div>
                <div>
                    <div class="flex items-center content-center justify-between py-3">
                        <h2>Informacion de Permisos</h2>
                        
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
                                       <th class="w-48 border border-slate-300">Email</th>
                                       <th class="w-48  border border-slate-300">Permiso</th>
                                       <th class="w-48  border border-slate-300">Estado</th>
                                       <th class="w-48 border border-slate-300">Acciones</th>
                                   </tr>
   
                               </thead>
   
                               <?php
                               foreach ($filas as $resultados) {
   
                               ?>
                                   <tbody>
   
                                       <tr>
                                           <td class="h-12 border border-slate-300 text-center"><?= $resultados["id_ud"] ?></td>
                                           <td class="border border-slate-300 text-center"><?= $resultados["correo"] ?></td>
                                           <td class="border border-slate-300 text-center"><?= $resultados["nombre_rol"] ?></td>
                                           <td class="border border-slate-300 text-center"></td>
                                           <td class="flex gap-3 border items-center content-center justify-center justify-items-center h-12">
                                               <a href="/src/administrador/permisos/editar_permisos.php?id=<?= $resultados["id_ud"] ?>"><img src="/IMG/pencil.svg" alt=""></a>
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