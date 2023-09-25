<?php
$ventasR = $_POST['ventas'];
$meta = 50;
$porcentajeVentas = $ventasR/$meta*100;
$imagenPath;

if ($porcentajeVentas > 80) {
    $imagenPath = 'verde.jpg';
} else if ($porcentajeVentas >= 50 && $porcentajeVentas <= 79) {
    $imagenPath = 'amarillo.jpg';
} else {
    $imagenPath = 'rojo.jpg';
}

echo '<img src="' . $imagenPath . '" alt="Imagen de desempeño">';
echo $valor;
?>