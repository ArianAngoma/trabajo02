<?php
include_once 'connection.php';

if (isset($_POST['guardar'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $historia = $_POST['historia'];

    if (!empty($nombre) && !empty($descripcion) && !empty($historia)) {

        $consulta_insert = $con->prepare('INSERT INTO deporte(nombre,descripcion,historia) VALUES(:nombre,:descripcion,:historia)');
        $consulta_insert->execute(array(
            ':nombre' => $nombre,
            ':descripcion' => $descripcion,
            ':historia' => $historia
        ));
        header('Location: account.php');

    } else {
        echo "<script> alert('Los campos estan vacios');</script>";
    }

}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Deporte</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div class="contenedor">
    <form action="" method="post">
        <div class="form-group">
            <input type="text" name="nombre" placeholder="Nombre" class="input__text">
        </div>
        <div class="form-group">
            <input type="text" name="descripcion" placeholder="Descripción" class="input__text">
        </div>
        <div class="form-group">
            <input type="text" name="historia" placeholder="Historia" class="input__text">
        </div>
        <div class="btn__group">
            <a href="index.php" class="btn btn__danger">Cancelar</a>
            <input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
        </div>
    </form>
</div>
</body>
</html>
