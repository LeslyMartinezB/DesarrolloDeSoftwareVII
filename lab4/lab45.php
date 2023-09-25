<?php
$valor = $_POST['numero'];
$matriz = array();

function crearMatriz($valor){
for ($i = 0; $i < $valor; $i++) {
    $fila = array();
    
    for ($j = 0; $j < $valor; $j++) {
        if ($i == $j ) {
            $fila[] = 1; // Elementos de la diagonal principal son 1
        } else {
            $fila[] = 0; // Otros elementos son 0
        }
    }
    $matriz[] = $fila;
    }
    return $matriz;
}

if ($valor > 0) { 
    $matrizIdentidad = crearMatriz($valor);

    $matriz[] = $fila;
    foreach ($matrizIdentidad as $fila) {
        echo implode(" ", $fila) . "<br>";
    }
}else{
    echo "El numero no es par, intente de nuevo";
}
?>