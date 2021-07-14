<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
</head>
<body>
<?php
unset($_SESSION["administrador"]);
unset($_SESSION["idCliente"]);
?>
<script language="javascript">
window.location.assign("login.php");
</script>


    
</body>
</html>