<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
    <title>Laboratorio 2.10</title>
</head>
<body>
    <?php
    $persona = array (
        array("nombre" => "Rosa", "estatura" => 168, "sexo" => "F"),
        array("nombre" => "Igancio", "estatura" => 175, "sexo" => "M"),
        array("nombre" => "Daniel", "estatura" => 172, "sexo" => "M"),
        array("nombre" => "Ruben", "estatura" => 182, "sexo" => "M")
    );

    echo "<b> DATOS SOBRE EL PERSONAL<b><br><hr>";

    $numPersonas = count($persona);

    for ($i=0; $i <= $numPersonas; $i++){
        echo "Nombre: <br>", $persona[$i]['nombre']," </b><br>";
        echo "Estatura: <br>", $persona[$i]['estarura']," cm</b><br>";
        echo "Sexo: <br>", $persona[$i]['sexo']," </b><br><hr>";
    }
    ?>
</body>
</html>
