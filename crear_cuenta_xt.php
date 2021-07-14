<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cuenta</title>
</head>
<body>
<?php
if (isset($_SESSION["administrador"])){
    if (isset($_POST["idCliente"])){
        include "conexion.php";
        $idCliente = $_SESSION['idCliente'];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $calle = $_POST["calle"];
        $numInterior = $_POST["numInterior"];
        $numExterior = $_POST["numExterior"];
        $ciudad = $_POST["ciudad"];
        $colonia = $_POST["colonia"];
        $estado = $_POST["estado"];
        $codPostal = $_POST["codPostal"];
        $esp = $_POST["esp"];
        $sql = "update 03_clientes set email = '$email', telefono = '$telefono', calle = '$calle', numInterior = '$numInterior', numExterior = '$numExterior', ciudad = '$ciudad', colonia = '$colonia', estado = '$estado', codPostal = '$codPostal', esp = '$esp' where idCliente = ".$idCliente;
        $nada = ejecutar($sql);
        echo "<script language='javascript'>";
        echo "window.location.assign('index.php');";
        echo "</script>";
    }else{
        echo "<script language='javascript'>";
        echo "window.location.assign('login.php?error=yes');";
        echo "</script>";
    }   

}else{
    echo "<script language='javascript'>";
    echo "window.location.assign('login.php');";
    echo "</script>";
}
?>
</body>
</html>