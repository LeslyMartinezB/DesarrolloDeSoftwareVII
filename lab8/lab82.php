<?php
include 'class_lib.php';

if (isset($_POST['numero'])) {
    $valor = $_POST['numero'];
    $arregloObjeto = new Arreglo($valor);
    $arregloObjeto->imprimirArreglo();
}
?>
