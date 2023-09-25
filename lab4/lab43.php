<!DOCTYPE html>
<html>
<head>
    <title>Laboratorio 4.3</title>
</head>
<body>
    <?php 
    $arreglo = array();
    for ($i = 0; $i < 20; $i++) {
        $numero = rand(1, 50);
        while (in_array($numero, $arreglo)){
            $numero = rand(1, 50);
        }
        $arreglo[$i] = $numero;
    }
    print_r($arreglo);

    $mayor = max($arreglo);
    $iMayor = array_search($mayor, $arreglo);

    echo "<br/> El elemento mayor se encuentra en la posición $iMayor = $mayor.</p>";
    ?>
</body>
</html>