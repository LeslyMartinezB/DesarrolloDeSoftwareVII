<html>
<head>
    <title>laboratorio 2.4</title>
</head>
<body>
    <?php
    //Creacion del arreglo array ("clave" => "valor "
    $persona = array(
        "juan" => "Panama",
        "John" => "USA",
        "eica" => "finlandia",
        "Kusanagi" => "japon"
    );

    //Recorrer todo el arreglo
    foreach($persona as $persona => $pais){
    print "$persona es de $pais<br>";
    }

    //Impresion especifica
    echo "<br>".$persona["juan"];
    echo "<br>".$persona["eica"];
    ?>
</body>
</html>