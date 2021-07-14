<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
<?php
if (isset($_POST["usuario"])){
    $un = $_POST["usuario"];
    $pw = $_POST["contraseña"];
    include "conexion.php";

    $sql =  "select * from 03_clientes where usuario='$un' and contraseña = PASSWORD('$pw')";
    $rs = ejecutar($sql);

    if (mysqli_num_rows($rs) == 0){
        echo '<script language="javascript">alert("Éste usuario aún no está registrado");</script>';
        echo '<script language="javascript">';
        echo 'window.location.assign("login.php?error=login");';
        echo '</script>';
    }else{
        $datos = mysqli_fetch_array($rs);
        $_SESSION["administrador"] = $datos["nombreCliente"];
        $_SESSION["idCliente"] = $datos["idCliente"];
        $_SESSION["emailCliente"] = $datos["email"];
        
        echo '<script language="javascript">';
        echo 'window.location.assign("pedido_articulos.php");';
        echo '</script>';

    }

}else{
    echo '<script language="javascript">';
    echo 'window.location.assign("login.php");';
    echo '</script>';
}
?>
    
</body>
</html>