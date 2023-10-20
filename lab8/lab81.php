<?php
include 'class_lib.php';

if (isset($_POST['numero'])) {
    $valor = $_POST['numero'];
    $matrizObjeto = new Matriz($valor);

    if ($matrizObjeto->esValorPar()) {
        $matrizObjeto->crearMatriz();
        $matrizObjeto->mostrarMatriz();
    } else {
        echo "El número no es par, intente de nuevo";
    }
}
?>
