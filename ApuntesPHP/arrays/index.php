<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $name = "Miguel";
    $age = 12;

    $output = "Hola $name ,con una edad de $age.";

    $bestLanguages = ["PHP", "JavaScript", "Python", 1, 2];
    $bestLanguages[] = "Java";

    ?>

    <h3>El mejor lenguaje es: <?= $bestLanguages[2] ?></h3>

    <ul>
        <?php foreach($bestLanguages as $key => $language) : ?>
            <li>
                <?= $key . " ". $language ?>
            </li>
            <?php endforeach; ?>

    </ul>


</body>

</html>