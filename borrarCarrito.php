<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<script language="javascript">';
    echo 'window.location.assign("productos.php");';
    echo '</script>';
    ?>
</body>
</html>