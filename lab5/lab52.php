<?php
$maximo = 1024 * 1024;
if (is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])) {
    $nombreDirectorio = "archivos/";
    $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
    $nombreCompleto = $nombreDirectorio . $nombrearchivo;

    if ($_FILES['nombre_archivo_cliente']['size'] <= $maxFileSize) {
    if (is_file($nombreCompleto)) {
        $idUnico = time();
        $nombrearchivo = $idUnico . "-" . $nombrearchivo;
        echo "Archivo repetido, se cambiará el nombre a $nombrearchivo <br><br>";
    }

    move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombrearchivo);
        echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
    } else {
            echo "El archivo excede el tamaño máximo permitido de 1MB. <br>";
        } 
    }else {
        echo "No se ha podido subir el archivo <br>";
    }
?>