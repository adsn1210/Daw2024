<?php
/*10. Escriba un programa que cada vez que se ejecute muestre una diana y entre 1 y 10
disparos al azar. También puede mostrar la puntuación obtenida (en el centro de la
diana se obtendrían 10 puntos y en el círculo exterior rojo 1 punto).
 */
?>

<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>DIANA</title>
</head>

<body>

    <div id="container">
        <div class="diana">

            <h1>Juego de la Diana</h1>
            <h2>Recarga para ver la nueva tirada</h2>

            <?php




            ?>

            <svg height="500" width="500" xmlns="http://www.w3.org/2000/svg">
                <circle r="200" cx="250" cy="250" fill="red" />
            </svg>

        </div>
    </div>
    <footer>
        <button onclick="location.reload();"> Recarga Pagina </button>
    </footer>

</body>

</html>