<?php
    /*Estas líneas son muy útiles en el desarrollo para depurar 
    el código y corregir problemas rápidamente, ya que te permiten ver cualquier error, 
    advertencia o aviso en la pantalla. Sin embargo, en entornos de producción, 
    suele ser más seguro desactivar la visualización de errores (poner display_errors en 0) 
    para evitar exponer información sensible a los usuarios. */
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>DADOS</title>
</head>

<body>

    <?php
    $dado1J1 = random_int(1, 6);
    $dado2J1 = random_int(1, 6);
    $dado1J2 = random_int(1, 6);
    $dado2J2 = random_int(1, 6);
    ?>


    <h1>DOS DADOS</h1>
    <h3>Actualice la pagina para mostrar una nueva tirada</h3>


    <?php
    //Comprobar si son pareja
    $esParejaDado1 = ($dado1J1 == $dado2J1);
    $esParejaDado2 = ($dado1J2 == $dado2J2);

    //PUNTUACION
    $puntuacionJugador1 = ($dado1J1 + $dado2J1);
    $puntuacionJugador2 = ($dado1J2 + $dado2J2);

    /*  En este juego, gana el jugador que:

        - ha obtenido una pareja de dados iguales de mayor valor, si los dos han obtenido
        parejas distintas
        - ha obtenido una pareja de dados iguales, si el otro jugador no ha obtenido pareja
        - ha obtenido una puntuación total mayor, si ningún jugador ha obtenido pareja */

    ?>

    <div class="dados">
        <div class="jugador1">
            <img src="dado<?php echo $dado1J1; ?>.png" alt="dado1">
            <img src="dado<?php echo $dado2J1; ?>.png" alt="dado1">

        </div>

        <div class="jugador2">
            <img src="dado<?php echo $dado1J2; ?>.png" alt="dado1">
            <img src="dado<?php echo $dado2J2; ?>.png" alt="dado2">
        </div>

    </div>

    <?php
    if ($esParejaDado1 && $esParejaDado2) {
        //Ambos jugadores tienen pareja, gana el que tenga la puntuacion mas alta
        if ($puntuacionJugador1 > $puntuacionJugador2) {
            echo "LOS DOS TENEIS PAREJA , GANA el Jugador 1 , por mayor puntuación";
        } elseif ($puntuacionJugador2 > $puntuacionJugador1) {
            echo "LOS DOS TENEIS PAREJA , GANA el Jugador 2 , por mayor puntuación";
        } else {
            echo "EMPATE TENEIS LOS MISMOS DADOS.";
        }
    } elseif ($esParejaDado1) {
        echo "GANA EL JUGADO 1 POR TENER PAREJA";
    } elseif ($esParejaDado2) {
        echo "GANA EL JUGADO 2 POR TENER PAREJA";
    } else {
        //ningun tiene pareja gana el de mayor puntuacion
        if ($puntuacionJugador1 > $puntuacionJugador2) {
            echo "GANA el Jugador 1 , por mayor puntuación";
        } elseif ($puntuacionJugador2 > $puntuacionJugador1) {
            echo " GANA el Jugador 2 , por mayor puntuación";
        } else {
            echo "EMPATE TENEIS La misma puntuacion.";
        }
    }
    ?>


</body>

</html>