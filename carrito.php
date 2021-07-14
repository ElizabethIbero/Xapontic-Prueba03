<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>
    <?php
    if (isset($_POST["id"])){
        if(isset($_SESSION["carrito"])){
            $carrito = $_SESSION["carrito"];
            $n = count($carrito);

            $carrito[$n]["id"] = $_POST["id"];
            $carrito[$n]["producto"] = $_POST["producto"];
            $carrito[$n]["precio"] = $_POST["precio"];
            $carrito[$n]["gramaje"] = $_POST["gramaje"];
            $carrito[$n]["cantidad"] = $_POST["cant"];

            $_SESSION["carrito"] = $carrito;



         }else{
            $carrito = array();
            $carrito[0] = array();
            $carrito[0]["id"] = $_POST["id"];
            $carrito[0]["producto"] = $_POST["producto"];
            $carrito[0]["precio"] = $_POST["precio"];
            $carrito[0]["gramaje"] = $_POST["gramaje"];
            $carrito[0]["cantidad"] = $_POST["cant"];

            $_SESSION["carrito"] = $carrito;

         }
        
         echo '<script language="javascript">';
            echo 'window.location.assign("productos.php?carrito=add");';
            echo '</script>';
        
        
        }else{
            echo '<script language="javascript">';
            echo 'window.location.assign("productos.php");';
            echo '</script>';
        }


    ?>
</body>
</html>