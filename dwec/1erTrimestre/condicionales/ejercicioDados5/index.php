<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Función para tirar tres dados al azar
function tirarDados()
{
    return [
        random_int(1, 6),
        random_int(1, 6),
        random_int(1, 6)
    ];
}

// Función para verificar si hay un trío
function esTrio($dados)
{
    return ($dados[0] == $dados[1] && $dados[1] == $dados[2]);
}

// Función para verificar si hay una pareja
function esPareja($dados)
{
    return ($dados[0] == $dados[1] || $dados[0] == $dados[2] || $dados[1] == $dados[2]);
}

// Función para obtener la puntuación total de los dados
function obtenerPuntuacion($dados)
{
    return array_sum($dados);
}

// Tirar los dados de los dos jugadores
$dadosJ1 = tirarDados();
$dadosJ2 = tirarDados();

$trioJ1 = esTrio($dadosJ1);
$trioJ2 = esTrio($dadosJ2);

$parejaJ1 = esPareja($dadosJ1);
$parejaJ2 = esPareja($dadosJ2);

$puntuacionJ1 = obtenerPuntuacion($dadosJ1);
$puntuacionJ2 = obtenerPuntuacion($dadosJ2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS CDN min.css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <title>DADOS</title>
</head>

<body>
    <main>

        <h2>Jugador 1</h2>
        <div>
            <?php
            foreach ($dadosJ1 as $dado) {
                echo "<img src='dado{$dado}.png' alt='Dado {$dado}' width='100px' height='100px'> ";
            }
            ?>
        </div>

        <h2>Jugador 2</h2>
        <div>
            <?php
            foreach ($dadosJ2 as $dado) {
                echo "<img src='dado{$dado}.png' alt='Dado {$dado}' width='100px' height='100px'> ";
            }
            ?>
        </div>

        <h3>Resultado:</h3>
        <?php
        if ($trioJ1 && $trioJ2) {
            if ($puntuacionJ1 > $puntuacionJ2) {
                echo "Jugador 1 gana con un trío de mayor valor.<br>";
            } elseif ($puntuacionJ2 > $puntuacionJ1) {
                echo "Jugador 2 gana con un trío de mayor valor.<br>";
            } else {
                echo "Empate, ambos jugadores tienen el mismo trío.<br>";
            }
        } elseif ($trioJ1) {
            echo "Jugador 1 gana con un trío.<br>";
        } elseif ($trioJ2) {
            echo "Jugador 2 gana con un trío.<br>";
        } elseif ($parejaJ1 && $parejaJ2) {
            if ($puntuacionJ1 > $puntuacionJ2) {
                echo "Jugador 1 gana con una pareja de mayor valor.<br>";
            } elseif ($puntuacionJ2 > $puntuacionJ1) {
                echo "Jugador 2 gana con una pareja de mayor valor.<br>";
            } else {
                echo "Empate, ambos jugadores tienen la misma pareja.<br>";
            }
        } elseif ($parejaJ1) {
            echo "Jugador 1 gana con una pareja.<br>";
        } elseif ($parejaJ2) {
            echo "Jugador 2 gana con una pareja.<br>";
        } else {
            if ($puntuacionJ1 > $puntuacionJ2) {
                echo "Jugador 1 gana con mayor puntuación total.<br>";
            } elseif ($puntuacionJ2 > $puntuacionJ1) {
                echo "Jugador 2 gana con mayor puntuación total.<br>";
            } else {
                echo "Empate, ambos jugadores tienen la misma puntuación.<br>";
            }
        }
        ?>

    </main>
</body>

</html>
