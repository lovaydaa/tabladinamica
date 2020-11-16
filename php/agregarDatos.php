<?php
    
    require_once "../php/conexion.php";
    $conexion = conexion();
    
    $nom = $_POST['nombre'];
    $ap = $_POST['apellido'];
    $ni = $_POST['nick'];
    $em = $_POST['email'];
    $tel = $_POST['telefono'];

    $sql = "INSERT into t_persona(nombre, apellido, nick, email, telefono) values('$nom', '$ap', '$ni', '$em', '$tel')";

    $result = mysqli_query($conexion, $sql);
?>