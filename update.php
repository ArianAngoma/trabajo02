<?php
include_once 'connection.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    $buscar_id = $con->prepare('SELECT * FROM deporte WHERE id=:id LIMIT 1');
    $buscar_id->execute(array(
        ':id' => $id
    ));
    $resultado = $buscar_id->fetch();
} else {
    header('Location: account.php');
}


if (isset($_POST['guardar'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $historia = $_POST['historia'];
    $id = (int)$_GET['id'];

    if (!empty($nombre) && !empty($descripcion) && !empty($historia)) {

        $consulta_update = $con->prepare(' UPDATE deporte SET  
					nombre=:nombre,
					descripcion=:descripcion,
					historia=:historia 
					WHERE id=:id;'
        );
        $consulta_update->execute(array(
            ':nombre' => $nombre,
            ':descripcion' => $descripcion,
            ':historia' => $historia,
            ':id' => $id
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
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div class="contenedor">
    <h2>CRUD EN PHP CON MYSQL</h2>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" name="nombre" value="<?php if ($resultado) echo $resultado['nombre']; ?>"
                   class="input__text">
            <input type="text" name="descripcion" value="<?php if ($resultado) echo $resultado['descripcion']; ?>"
                   class="input__text">
        </div>
        <div class="form-group">
            <input type="text" name="historia" value="<?php if ($resultado) echo $resultado['historia']; ?>"
                   class="input__text">
        </div>
        <div class="btn__group">
            <a href="account.php" class="btn btn__danger">Cancelar</a>
            <input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
        </div>
    </form>
</div>
</body>
</html>
