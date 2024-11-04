

<?php
$circulo = rand(1, 10);
?>

<style>
    /*  varias clases con colores HWB */
    .color1 {
        fill: hwb(0 0% 0%);
    }

    .color2 {
        fill: hwb(60 0% 0%);
    }

    .color3 {
        fill: hwb(120 0% 0%);
    }

    .color4 {
        fill: hwb(180 0% 0%);
    }

    .color5 {
        fill: hwb(240 0% 0%);
    }

    .color6 {
        fill: hwb(300 0% 0%);
    }

    .color7 {
        fill: hwb(360 0% 0%);
    }
</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>CIRCULOS</title>
</head>

<body>
    <h1>CIRCULOS GENERADOS</h1>
    <table>
        <tr>
            <?php
            for ($i = 0; $i < $circulo; $i++) {
                $colorClass = 'color' . rand(1, 7);
                $num = rand(1,9);
                echo '<td>';
                echo '  <svg height="100" width="100" xmlns="http://www.w3.org/2000/svg">';
                echo ' <circle r="45" cx="50" cy="50" class = "' . $colorClass . '"/>';
                echo ' <text x="50" y="50" font-size ="20"  text-anchor="middle" fill="black">'. $num .' </text>';
                echo '</td>';
            }
            ?>
        </tr>

    </table>

</body>

</html>