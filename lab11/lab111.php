<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 11.1</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Consulta de noticias</h1>
<?php
require_once("class/noticias.php");

$obj_noticia = new noticia();

$noticias_por_pagina = 5;
$pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

$total_noticias = $obj_noticia->contar_noticias();
$total_paginas = ceil($total_noticias / $noticias_por_pagina);

$inicio = ($pagina_actual - 1) * $noticias_por_pagina;
$fin = $noticias_por_pagina;

$noticias = $obj_noticia->consultar_noticias_paginacion($inicio, $fin);

$nfilas = count($noticias);

if ($nfilas > 0) {
    print ("<table>\n");
    print ("<tr>\n");
    print ("<th>Titulo</th>\n");
    print ("<th>Texto</th>\n");
    print ("<th>Categoria</th>\n");
    print ("<th>Fecha</th>\n");
    print ("<th>Imagen</th>\n");
    print ("</tr>\n");

    foreach ($noticias as $resultado) {
        print ("<tr>\n");
        print ("<td>" . $resultado['titulo'] . "</td>\n");
        print ("<td>" . $resultado['texto'] . "</td>\n");
        print ("<td>" . $resultado['categoria'] . "</td>\n");
        print ("<td>" . date("j/n/Y", strtotime($resultado['fecha'])) . "</td>\n");

        if ($resultado['imagen'] != "") {
            print ("<td><a target='_blank' href='img/" . $resultado['imagen'] . "'>
            <img border='0' src='img/iconotexto.gif'></a></td>\n");
        } else {
            print ("<td>&nbsp;</td>\n");
        }
        print ("</tr>\n");
    }
    print ("</table>\n");

    $mostrando_desde = $inicio + 1;
    $mostrando_hasta = min($inicio + $noticias_por_pagina, $total_noticias);
    echo "Mostrando noticias del $mostrando_desde al $mostrando_hasta de un total de $total_noticias ";
    echo "[ ";
    
    if ($pagina_actual > 1) {
        $pagina_anterior = $pagina_actual - 1;
        echo "<a href='lab111.php?pagina=$pagina_anterior'>Anterior</a> ";
    }
    
    for ($i = 1; $i <= $total_paginas; $i++) {
        echo "<a href='lab111.php?pagina=$i'>$i</a> ";
    }
    
    if ($pagina_actual < $total_paginas) {
        $pagina_siguiente = $pagina_actual + 1;
        echo "<a href='lab111.php?pagina=$pagina_siguiente'>Siguiente</a>";
    }
    
    echo " ]";
} else {
    print ("No hay noticias disponibles");
}
?>
</body>
</html>
