<?php
    function conexion(){
        //variables de identificacion
        $servidor = "10.255.254.126";
        $usuario = "lovayda";
        $password = "La ciudad 19801980";
        $bd = "sisconaz2";

        //variable de conexion
        $conexion = mysqli_connect($servidor, $usuario, $password, $bd);

        return $conexion;
    }
    /*
    if (conexion()) {
        echo "Conexion exitosa";
    }else {
        echo "Conexion fallida";
    }*/
?>