<?php
    require_once "../php/conexion.php";
    $conexion = conexion();
    
    $id = $_POST['id'];
    $nom = $_POST['nombre'];
    $ap = $_POST['apellido'];
    $ni = $_POST['nick'];
    $em = $_POST['email'];
    $tel = $_POST['telefono'];

    $sql = "UPDATE t_persona SET nombre = '$nom', apellido = '$ap', nick = '$ni', email = '$em', telefono = '$tel' where id = $id";
    echo $result = mysqli_query($conexion, $sql);
?>