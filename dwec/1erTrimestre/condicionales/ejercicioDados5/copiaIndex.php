<?php
//Para mostrar los errores por pantallla, con el 1 se muestra si pusieramos 0 no se verian.
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ese href de css es un CDN min.css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <title>DADOS</title>
</head>

<body>
    <main>

        <?php
        /*Funcion para generar tres dados */
        function lanzarDados()
        {
            return [
                random_int(1, 6),
                random_int(1, 6),
                random_int(1, 6)
            ];
        }

        //Funcion para verificar si los dados forman un trio
        function esTrio($dados)
        {
            return ($dados[0] == $dados[1] && $dados[1] == $dados[2]);
        }

        //Funcion para verificar si son pareja
        function esPareja($dados)
        {
            return ($dados[0] == $dados[1] || $dados[0] == $dados[2] || $dados[1] == $dados[2]);
        }

        //Funcion para sumar la puntuacion maxima de los dados
        function obtenerPuntuacion($dados)
        {
            //array_sum is a function that calculates the sum of all elements in an array.
            return array_sum($dados);
        }

        //Tirar los dados de los 2 jugadoes
        $dadosJ1 = lanzarDados();
        $dadosJ2 = lanzarDados();

        #YA QUE HEMOS CREADO FUNCIONES, PODEMOS COMPROBAR SI HA SALIDO TRIO - PAREJA O MAYOR PTOS.
        //TRIOS
        $trioJ1 = esTrio($dadosJ1);
        $trioJ2 = esTrio($dadosJ2);

        //PAREJAS
        $parejaJ1 = esPareja($dadosJ1);
        $parejaJ2 = esPareja($dadosJ2);

        //Mayor puntuacion
        $puntacionJ1 = obtenerPuntuacion($dadosJ1);
        $puntacionJ2 = obtenerPuntuacion($dadosJ2);
        ?>



        <?php
        //TRIOS
        if ($trioJ1 && $trioJ2) {

            if ($puntacionJ1 > $puntacionJ2) {
                echo " <p> Jugador 1 gana por tener un trio de mayor valor. <p>";
            } elseif ($puntacionJ2 > $puntacionJ1) {
                echo  " <p> Jugador 1 gana por tener un trio de mayor valor. <p>";
            } else {
                echo  " <p> EMPATE TIENEN EL MISMO VALOR DE TRIOS<p>";
            }
        } elseif ($trioJ1) {
            echo " GANA el Jugador 1 por obtener un trio";
        } elseif($trioJ2){
            echo "GANA el jugador 2 por obtener un trio";
        //PAREJAS
        }elseif($parejaJ1 && $parejaJ2){
            if($puntacionJ1 > $puntacionJ2){
                echo "El Jugador 1 Gana por mayor puntuacion en las parejas";
            }elseif($puntacionJ2 > $puntacionJ1){
                echo "El jugador 2 Gana por mayor puntuacion en las parejas";
            }else{
                echo "EMPATE DE PUNTUACION ";
            }
            //PAREJA
        }elseif($parejaJ1){
            echo "Gana el Jugador 1 por tener una Pareja";
        }elseif($parejaJ2){
            echo "Gana el Jugador 2 por tener una pareja";
        }else{
            if($puntacionJ1 > $puntacionJ2){
                echo "Gana jugador 1 por mayor puntuacion";
            }elseif($puntacionJ2 > $puntacionJ1){
                echo "Gana el jugador 2 por tener mayor puntuacion";
            }else{
                echo "EMPATE TIENEN LA MISMA PUNTUACION SIN TENER PAREJAS NI TRIOS";
            }
        }

        ?>



        <h1>TRES DADOS</h1>
        <h2>Actualice la pagina para mostrar una nueva tirada</h2>


        <!-- IMAGENES DE LOS DADOS-->

        <?php
        foreach ($dados as $dado) {
            echo "<img src = 'dado{$dado}.png' alt = 'Dado {$dado}' width='100px' height='100px'> ";
        }
        ?>


    </main>
</body>

</html>