<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cuenta</title>
</head>
<body>
<?php
if (isset($_POST["nombreCliente"]) &&  isset($_POST["apellido"]) && isset($_POST["usuario"]) && isset($_POST["contraseña"])){ 
    include "conexion.php";
    $nombreCliente = $_POST["nombreCliente"];
    $apellido = $_POST["apellido"];
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $sql = "insert into 03_clientes (nombreCliente, apellido, usuario, contraseña) values('$nombreCliente', '$apellido', '$usuario', PASSWORD('$contraseña'))";
    $rs = ejecutar($sql);
    $sql2 = "select * from 03_clientes where nombreCliente='$nombreCliente' and apellido='$apellido' and usuario='$usuario' and contraseña = PASSWORD('$contraseña')"; 
    $rs2 = ejecutar($sql2);
    if (isset($rs2)){
         $datos = mysqli_fetch_array($rs2);
         $_SESSION["administrador"] = $datos["nombreCliente"];
         $_SESSION["idCliente"] = $datos["idCliente"];
         echo '<script language="javascript">';
         echo 'window.location.assign("crear_cuenta.php");';
         echo '</script>';

    }else{
        echo '<script language="javascript">alert("Éste usuario aún no está registrado");</script>';
        echo '<script language="javascript">';
        echo 'window.location.assign("login.php?error=login");';
        echo '</script>';

    }    
}else{
    echo "<script language='javascript'>";
    echo "window.location.assign('login.php');";
    echo "</script>";
}
?>
</body>
</html>