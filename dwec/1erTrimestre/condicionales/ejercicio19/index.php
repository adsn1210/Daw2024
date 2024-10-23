<?php
/*16. Escriba un programa que cada vez que se ejecute muestre tres carta entre 1 y 10, al
azar, e indique el valor más alto.*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas</title>
</head>

<body>
    <h1>La carta mas alta</h1>
    <p>Actualice la pagina para mostrar un nuevo trio de cartas</p>

    <div class="cartas">

        <?php
        /*Generamos las 3 cartas aleatorias */
        $carta1 = rand(1,10);
        $carta2 = rand(1,10);
        $carta3 = rand(1,10);

        /*Determinamos cual es la mas alta */
        $cartaMasAlta = max($carta1,$carta2,$carta3);
        ?>
        <!--Importamos las 3 imagenes, con el nombre cartaX.png, generamos el numero con php  -->
        <img src="carta<?php echo $carta1?>.png" alt="carta1">
        <img src="carta<?php echo $carta2?>.png" alt="carta2">
        <img src="carta<?php echo $carta3?>.png" alt="carta3">

    </div>
    <p>La carta mas alta es : <?php echo $cartaMasAlta ?> </p>
</body>

</html>