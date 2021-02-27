
<?php
    function conectar(){
        $user='ariel_2020';
        $pass='86$sh44@7W@zhgJ';
        $server='db4free.net';
        $db='distri_2020uptc';
        $conexion=new mysqli($server,$user,$pass,$db) or die ("Error al conectar a la base de datos");
        if ($conexion->connect_error) {
            die("Connection failed: " . $conexion->connect_error);
        }

    return $conexion;

    }
?>
