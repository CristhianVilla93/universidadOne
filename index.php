<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body>
    <section class="bg-[rgba(255,245,210,255)] h-screen flex justify-center items-center content-center ">
        <div class="flex justify-center items-center flex-col content-center" >
            <img class="w-96" src="/IMG/logo2.jpg" alt="logo">
            <form class="bg-white w-80 flex justify-center items-center flex-col gap-3 p-4" action="/src/manejo_db/login_db.php" method="post">

                <h1 class="text-[rgba(104,102,100,0.84)] p-3">Bienvenido Ingresa con tu cuenta</h1>

                <div class="border-2 border-inherit flex relative">
                    <input class="w-72 h-8 pl-2" type="email" id="correo" name="correo" placeholder="Email">
                    <img class="absolute ml-[265px] mt-2  mb-2" src="/IMG/envelope-fill.svg" alt="">
                </div>

                <div class="border-2 border-inherit flex relative">
                    <input class="w-72 h-8 pl-2" type="password" id="pass" name="pass" placeholder="Paswword">
                    <img class="absolute ml-[269px] mt-2  mb-2" src="/IMG/lock-fill.svg" alt="">
                </div>

                <button class=" bg-[rgba(1,122,254,255)] text-white p-2 rounded-md w-24 ml-48" type="submit"> Ingresar</button>

            </form>
        </div>

    </section>
</body>

</html>