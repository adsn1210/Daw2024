<?php
// Configuración inicial
$maxPuntuacion = 10;
$radioInicial = 200;  // Radio del círculo exterior
$decrementoRadio = 20; // Cantidad de reducción de radio en cada aro
$centroX = 250; // Centro X de la diana
$centroY = 250; // Centro Y de la diana

// Comienza el SVG
echo '<svg width="500" height="500" xmlns="http://www.w3.org/2000/svg">';

// Bucle para generar los aros
for ($puntuacion = $maxPuntuacion; $puntuacion >= 1; $puntuacion--) {
    // Determina el color (rojo para los impares, blanco para los pares)
    $color = ($puntuacion % 2 == 0) ? "white" : "red";
    
    // Calcula el radio actual
    $radio = $radioInicial - (($maxPuntuacion - $puntuacion) * $decrementoRadio);
    
    // Dibuja el círculo
    echo "<circle cx='$centroX' cy='$centroY' r='$radio' fill='$color' />";
    
    // Añade el texto de puntuación en el centro de cada aro
    echo "<text x='$centroX' y='". ($centroY - $radio + 10) ."' text-anchor='middle' fill='black' font-size='20' >$puntuacion</text>";
}

// Cierra el SVG
echo '</svg>';
?>
