<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
<?php
if (isset($_POST["nombreCliente"])){
    $nombre = $_POST["nombreCliente"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $resena = $_POST["reseña"];

    include "conexion.php";

    $sql = "insert into 03_reseñas (nombreCliente, apellido, email, reseña) values('$nombre', '$apellido', '$email', '$resena')";

    $rs = ejecutar($sql);

    echo "<script language='javascript'>";
    echo "window.location.assign('contacto.php');";
    echo "</script>";

}else{
    echo "<script language='javascript'>";
    echo "window.location.assign('contacto.php');";
    echo "</script>";
}
?>
</body>
</html>