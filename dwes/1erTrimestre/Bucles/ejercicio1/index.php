<?php
#1. Escriba un programa que dibuje entre 1 y 10 círculos negros (al azar) en una fila de tabla.
?>

<?php
$circulo = rand(1, 10);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="">
    <title>CIRCULOS</title>
</head>

<body>
    <h1>CIRCULOS GENERADOS</h1>
    <table>
        <tr>
            <?php
            for ($i = 0; $i < $circulo; $i++) {
                echo '<td>';
                echo '  <svg height="100" width="100" xmlns="http://www.w3.org/2000/svg">';
                echo ' <circle r="45" cx="50" cy="50" fill="black" /> </svg>';
                echo '</td>';
            }
            ?>
        </tr>
    </table>
</body>

</html>