<?php

const API_URL = "https://www.whenisthenextmcufilm.com/api";

// Inicializar una nueva sesión de Curl; ch = curl handle
$ch = curl_init(API_URL);

// Indicar que queremos recibir el resultado de la petición y que no lo muestre en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la petición y guardamos el resultado
$result = curl_exec($ch);

// Manejo de errores de Curl
if ($result === false) {
    echo 'Curl error: ' . curl_error($ch);
    curl_close($ch);
    exit; // Termina el script si hay un error
}

$data = json_decode($result, true);
curl_close($ch);

// Verificar si la respuesta es válida
if (json_last_error() !== JSON_ERROR_NONE) {
    echo 'Error decodificando JSON: ' . json_last_error_msg();
    exit; // Termina el script si hay un error de decodificación
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">

    <title>La próxima película de Marvel</title>
</head>

<body>

    <main>
        <section>
            <h2>La próxima película de MARVEL</h2>
        </section>
        <section style="display:grid; align-items:center">
            <?php
            // Verificar si $data contiene los datos esperados
            if (isset($data["poster_url"]) && isset($data["title"])) {
                echo '<img src="' . htmlspecialchars($data["poster_url"]) . '" width="300" alt="poster de ' . htmlspecialchars($data["title"]) . '" style="border-radius: 16px;">';
            } else {
                echo 'No se encontraron datos válidos de la API.';
            }
            ?>
        </section>
    </main>

</body>

</html>
