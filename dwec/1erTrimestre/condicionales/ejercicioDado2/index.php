<!--2. Escriba un programa que cada vez que se ejecute muestre la tirada de dos jugadores
que tiran un dado al azar cada uno y diga quién ha ganado.
En este juego, gana el jugador que ha obtenido una puntuación más alta que el otro
jugador. Si no gana ningún jugador, lógicamente se habrá producido un empate. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados2</title>
</head>

<body>


    <h1>JUEGO: DADO MAS ALTO</h1>
    <h2>Actualiza la pagina para mostrar una nueva tirada</h2>

    <?php
    //variable Jugadores
    $PJ1 = "JUGADOR 1";
    $PJ2 = "JUGADOR 2";

    //Dados numero random
    $dado1 = rand(1, 6);
    $dado2 = rand(1, 6);

    //Puntuacion de jugadores
    $pntPJ1 = $dado1;
    $pntPJ2 = $dado2;

    ?>


    <div class="juego">
        <div class="jugador">
            <p><?php echo $PJ1 ?>: <strong> <?php echo $pntPJ1; ?></strong> </p>
            <img src="dado<?php echo $dado1 ?>.png" alt="Dado jugador 1">
        </div>
        <div class="jugador">
            <p><?php echo $PJ2 ?>: <strong><?php echo $pntPJ2; ?></strong></p>
            <img src="dado<?php echo $dado2 ?>.png" alt="Dado jugador 2">

        </div>
    </div>

    <div class="resultado">

        <?php
        if ($pntPJ1 > $pntPJ2) {
            echo "<p>El $PJ1 gana</p>";
        } else if ($pntPJ1 < $pntPJ2) {
            echo "<p>El $PJ2 gana</p>";
        } else {
            echo "<p>¡EMPATE!</p>";
        } ?>

    </div>
    <!-- recarga la pagina atraves de un boton -->
    <button onclick="window.location.reload();">Nueva tirada</button>


</body>

</html>