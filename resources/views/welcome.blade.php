<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            h1{
    color: blue;
}

input{
    margin: 10px;
}

.enviar{
    color: white;
    background-color: rgb(59, 59, 247);
    border: none;
    padding: 5px;
    border-radius: 5px;
    margin-left: 10px;
    cursor: pointer;
    transition: all ease 0.5s;
}
a{
    color: white;
    background-color: rgb(59, 59, 247);
    border: none;
    padding: 5px;
    border-radius: 5px;
    margin-left: 10px;
    cursor: pointer;
    transition: all ease 0.5s;
    text-decoration: none;
}
        </style>
    </head>
        <body>
            <?php 
                echo '<h1>Hola Mundo</h1>'; 
                $nombre = 'Alejandro';
                $edad = 32;
                $añoActual = 2024;
                $nacimiento = $añoActual - $edad;
    
                $frace = 'Mi nombre es '. $nombre. ', y tengo '. $edad. ' años. Nací en el año'. $nacimiento;
                echo $frace;
            ?>
            <h2>Ingrese su nombre y su edad en los siguientes campos y precione continuar</h2>
            <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div>
                    <input type="text" name="nombre" placeholder="Ingrese su nombre">
                </div>
                <div>
                    <input type="number" name="edad" placeholder="Ingrese su edad">
                </div>
                <button class="enviar" type="submit" name="submit" value="Submit Form">Continuar</button>
                <br>
                <br>
            </form>
            <?php
                if(isset($_GET['submit'])){
                    $name = $_GET['nombre'];
                    $edad = $_GET['edad'];
    
                    $año = 2024;
                    $nacimiento = $año - $edad;
  

                    echo 'Hola '. $name. ', tu edad es '. $edad. ', y naciste en el año '. $nacimiento;
                }
            ?>
            <br>
            <br>
            <br>
            <a class="btn btn-danger" href="{{url('/ruta-nueva')}}">Ir a nueva ruta</a>
            <a class="btn btn-danger" href="{{url('/rutaControlador')}}">Ir a ruta servida desde un controlador</a>
        </body>

</html>
