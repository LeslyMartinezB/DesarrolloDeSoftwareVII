<html>
<head>
    <title>laboratorio 2.5</title>
</head>
<body>
    <?php
    $figuras = array('cuadrado','Triángulo','circulo');
    $figuras[1] = 'rectangulo';
    mostrar_figuras($figuras,"Asignacion de rectangulo");

    array_push($figuras,'pentagono');
    mostrar_figuras($figuras,"adicion de pentagono al final");

    array_unshift($figuras,'hexagono');
    mostrar_figuras($figuras,"adicion de hexagono al incio");

    array_pop($figuras);
    mostrar_figuras($figuras,"Eliminacion del ultimo");

    array_shift($figuras);
    mostrar_figuras($figuras,"Eliminacion del primero");

    function mostrar_figuras($figuras, $mensaje){
        echo "<br>Arreglo despues de $mensaje <br>";
        foreach($figuras as $figura){
            echo "$figura <br>";
        }
    }
    ?>
</body>
</html>