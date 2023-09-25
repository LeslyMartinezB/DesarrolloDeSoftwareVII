<?php
$valor = $_POST['numero'];
$arreglo = array();
for ($i = 0; $i < 5; $i++) 
{
    $arreglo[$i] = $valor;
}
print_r($arreglo);
?>