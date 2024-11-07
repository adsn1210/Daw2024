<?php
ini_set('display_erros', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        //Funcion cual dado es mayor
        function esMayor($dados)
        {
            return max($dados);
        }

        //Lanzar los dados
        $dados = lanzarDados();
        ?>

        <h1>TRES DADOS</h1>
        <h2>Actualice la pagina para mostrar una nueva tirada</h2>


        <!-- IMAGENES DE LOS DADOS-->
  
        <?php
        foreach ($dados as $dado) {
            echo "<img src = 'dado{$dado}.png' alt = 'Dado {$dado}' width='100px' height='100px'> ";
        }
        ?>

        <?php
        // Ordenar los dados para facilitar comparaciones
        sort($dados);
        if(esTrio($dados)){
            echo "<p> Es un trio !!!</p>";
        }elseif(esPareja($dados)){
            echo "<p> Es una pareja!!! </p>";
        }else {
            echo "<p>El mayor es " .esMayor($dados). " </p>";
        }
        ?>

    </main>
</body>

</html>