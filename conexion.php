<?php
global $conexion;

function conectar(){
    global $conexion;

    // si la BD está en el mismo equipo que el servidor Web, el servidor es "localhost"
    $servidor = "200.13.106.23:33000"; 
    $un = "compint3_2020p";
    $pw = "p2020";
    $db = "compint32020p";

    $conexion = mysqli_connect($servidor, $un, $pw, $db) or die ("no se pudo conectar a la BD");
}


function desconectar(){
    global $conexion;
    mysqli_close($conexion);
}


function ejecutar($sql){
    global $conexion;

    //conectamos
    conectar();

    //hacemos el query y, en caso de búsqueda, obtenemos un recordset
    $rs = mysqli_query($conexion, $sql) or die ("hay un error en el query<br>".$sql);

    //deconectamos
    desconectar();

    //devolvemos el recordset
    return $rs;
}

function query($sql){
    global $conexion;
    $rs = mysqli_query($conexion, $sql) or die ("hay un error en el query<br>".$sql);
    return $rs;

}

$ruta = "fotos/";
$ruta2 = "../fotos/";

?>