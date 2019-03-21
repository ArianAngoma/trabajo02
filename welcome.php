<!--
Into this file, we create a layout for welcome page.
-->

<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$fname = $lname = $email = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $fname = $row["Firstname"];
        $lname = $row["Lastname"];
        $email = $row["Email"];
    }
}

$sentencia_select = $con->prepare('SELECT * FROM deporte ORDER BY id DESC');
$sentencia_select->execute();
$resultado = $sentencia_select->fetchAll();
?>

<link rel="stylesheet" href="css/carta.css">

<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/img-03.png" alt="">
        <h1 class="text-uppercase mb-0">Bienvenido <?php echo $fname . " " . $lname; ?></h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">LIMA 2019</h2>
    </div>
</header>

<?php foreach ($resultado as $fila): ?>

    <div class="my-2 p-relative bg-white shadow-1 blue-hover">
        <div class="px-2 py-2 text-center" style="border-top: #5897fb 5px solid;
    border-right: #5897fb 5px solid;
  border-bottom: #5897fb 5px solid;
  border-left: #5897fb 5px solid;">
            <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                <?php echo $fila['nombre']; ?>
            </h1>
            <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                <?php echo $fila['descripcion']; ?>
            </p>
            <p class="mb-1">
                <?php echo $fila['historia']; ?>
            </p>
        </div>
    </div>

<?php endforeach ?>



