<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>

<body>


    <?php /*1. Escriba un programa que cada vez que se ejecute muestre la tirada de dos dados al
            azar y diga si ha salido una pareja de valores iguales o el mayor de los valores
            obtenidos.*/

    $dado1 = rand(1, 6);
    $dado2 = rand(1, 6);
    ?>
    <h1>DOS DADOS</h1>
    <h3>Actualice la pagina para mostrar una nueva tirada</h3>

    <?php
    $dadoMasAlto = max($dado1, $dado2);
    ?>
    <div class="dados">
        <img src="dado<?php echo $dado1; ?>.png" alt="dado1">
        <img src="dado<?php echo $dado2; ?>.png" alt="dado2">
    </div>


    <p>
        <?php
        if ($dado1 == $dado2) {
            echo "Ha salido una pareja igual";
        } else {
            echo "el dado mas alto es: $dadoMasAlto";
        }

        ?>

    </p>
</body>

</html>