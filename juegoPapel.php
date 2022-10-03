<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function ImprimeFormulario()
    {
    ?>

        <h1>PIEDRA, PAPEL O TIJERAS</h1>

        <form action="juegoPapel.php" method="POST">


            Piedra: <input type="radio" id="piedra" value="Piedra" name="eleccionJ"><br />
            Papel: <input type="radio" id="papel" value="Papel" name="eleccionJ"><br />
            Tijeras: <input type="radio" id="tijeras" value="Tijera" name="eleccionJ"><br />
            Lagarto: <input type="radio" id="lagarto" value="Lagarto" name="eleccionJ"><br />
            Spok: <input type="radio" id="spok" value="Spok" name="eleccionJ"><br />
            <input type="submit" id="boton" name="jugar" value="jugar"><br />
        </form>



    <?php
    }
    $elecciones = ["Piedra", "Papel", "Tijera", "Lagarto", "Spok"];

    $Opciones = [

        "Piedra" => [
            "Papel" => "Pierde",
            "Tijera" => "Gana",
            "Piedra" => "Empata",
            "Lagarto" => "Gana",
            "Spok" => "Pierde"
        ],


        "Tijera" => [
            "Papel" => "Gana",
            "Tijera" => "Empata",
            "Piedra" => "Pierde",
            "Lagarto" => "Gana",
            "Spok" => "Pierde"
        ],


        "Lagarto" => [
            "Papel" => "Gana",
            "Tijera" => "Gana",
            "Piedra" => "Pierde",
            "Lagarto" => "Empata",
            "Spok" => "Gana"
        ],


        "Papel" => [
            "Papel" => "Empata",
            "Tijera" => "Pierde",
            "Piedra" => "Gana",
            "Lagarto" => "Pierde",
            "Spok" => "Gana"
        ],

        "Spok" => [
            "Papel" => "Pierde",
            "Tijera" => "Gana",
            "Piedra" => "Gana",
            "Lagarto" => "Pierde",
            "Spok" => "Empata"
        ],

    ];



    if (!isset($_POST['eleccionJ'])) {

        echo "Bienvenido a piedra, papel, tijera, lagarto, spok ¿aceptas el reto.?<br>";

        ImprimeFormulario();
    }

    if (isset($_POST['eleccionJ'])) {
        $elecJ = $_POST['eleccionJ'];

        $elecM = rand(0, count($elecciones));
        $eleccion = $elecciones[$elecM];


        echo "La eleccion del jugador es: {$elecJ}<br>";
        echo "La eleccion de la maquina es: {$eleccion}<br>";
        echo "El resultado del juego es: {$Opciones[$elecJ][$eleccion]}<br>";
        ImprimeFormulario();
    }


    ?>