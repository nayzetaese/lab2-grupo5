<?php

$data = $_FILES["archivo"];

$nombre = $data["name"];
$temporal = $data["tmp_name"];

$carpeta = "uploads/";

if (move_uploaded_file($temporal, $carpeta . $nombre)) {

    echo "Archivo guardado correctamente";

} else {

    echo "No se pudo guardar el archivo";

}

?>

<br><br>

<a href="index.php" class="btn btn-primary">
    Regresar
</a>