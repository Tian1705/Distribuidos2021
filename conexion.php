
<?php
    function conectar(){
        $user='sebas_tian';
        $pass='sebas1999';
        $server='db4free.net';
        $db='distribuidos2021';
        $conexion=new mysqli($server,$user,$pass,$db) or die ("Error al conectar a la base de datos");
        if ($conexion->connect_error) {
            die("Connection failed: " . $conexion->connect_error);
        }

    return $conexion;

    }
?>
