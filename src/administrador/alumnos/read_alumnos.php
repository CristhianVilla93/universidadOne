<?php

session_start();

$filas = ($_SESSION["admin_alum"]);


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
                <a class="flex  items-center content-center gap-3" href="#"><img src="/IMG/permisos.svg" alt="">Permisos</a>
                <a class="flex  items-center content-center gap-3" href="#"><img src="/IMG/maestros.svg" alt="">Maestros</a>
                <a class="flex  items-center content-center gap-3" href="/src/administrador/alumnos/read_alumnos.php"><img src="/IMG/alumnos.svg" alt="">Alumnos</a>
                <a class="flex  items-center content-center gap-3" href="#"><img src="/IMG/clases.svg" alt="">Clases</a>
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
                <h1 class="text-red-800">Lista de Alumnos</h1>
                <div>
                    <div class="flex justify-between py-3">
                        <h2>Informacion de Alumnos</h2>
                        <button><a  href="">Agregar Alumno</a></button>
                    </div>

                    <br>
                    <div>
                       
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>DNI</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Direccion</th>
                                    <th>Date</th>
                                    <th>Acciones</th>
                                </tr>

                            </thead>

                            <?php
                            foreach ($filas as $resultados) {

                            ?>
                                <tbody>

                                    <tr>
                                        <td><?= $resultados["id_ud"] ?></td>
                                        <td><?= $resultados["dni"] ?></td>
                                        <td><?= $resultados["nombre"] ?></td>
                                        <td><?= $resultados["Apellido"] ?></td>
                                        <td><?= $resultados["direccion"] ?></td>
                                        <td><?= $resultados["fecha_nacimiento"] ?></td>
                                        <td class="flex gap-2">
                                            <a href="#?id=<?= $resultados["id_ud"] ?>"><img src="/IMG/pencil.svg" alt=""></a>
                                            <a href="/src/administrador/alumnos/delete.php?id_ud=<?= $resultados["id_ud"] ?>"><img src="/IMG/delet.svg" alt=""></a>
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
    </section>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>