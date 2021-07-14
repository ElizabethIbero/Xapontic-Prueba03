<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificar carrito</title>
</head>
<body>
<?php
if (isset($_SESSION["carrito"])){
    if (isset($_REQUEST["accion"])){
        $carrito = $_SESSION["carrito"];
        $index = $_REQUEST["index"];
        if ($_REQUEST["accion"] == "quitar"){
            if ($carrito[$index]["cantidad"] > 1){
                $carrito[$index]["cantidad"]--;
            }
        }else if ($_REQUEST["accion"] == "aumentar"){
            $carrito[$index]["cantidad"]++;


        }else if ($_REQUEST["accion"] == "eliminar"){
            array_splice($carrito, $index, 1); 
        }

        $_SESSION["carrito"] = $carrito;

        echo '<script language="javascript">';
        echo 'window.location.assign("pedido_articulos.php");';
        echo '</script>';

    }else{
        echo '<script language="javascript">';
        echo 'window.location.assign("pedido_articulos.php");';
        echo '</script>';
    }
}else{
    echo '<script language="javascript">';
    echo 'window.location.assign("productos.php");';
    echo '</script>';
}


?>
</body>
</html>