<?php
$valor = $_POST['numero'];
    $resultado = 1;
    for ($i = 1; $i <= $valor; $i++) {
        $resultado *= $i;}
echo "<br/> El resultado factorial de ".$valor. " es: " .$resultado;
?>