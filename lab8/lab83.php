<!DOCTYPE html>
<html>
<head>
    <title>Laboratorio 8.3</title>
</head>
<body>
    <?php 
    include 'class_lib.php';

    $arregloObjeto = new ArregloGenerator();
    $arregloObjeto->generarArreglo();
    $arreglos = $arregloObjeto->getArreglo();
    
    print_r($arreglos);

    echo "<br/>" . $arregloObjeto->encontrarMayor() . "</p>";
    ?>
</body>
</html>
