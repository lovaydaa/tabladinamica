<?php
    require_once "../php/conexion.php";
    $conexion = conexion();

    $id = $_POST['id'];

    $sql = "Delete from t_persona where id = '$id'";

    echo $result = mysqli_query($conexion, $sql); //Se pone echo para enviar al ajax (0 o 1)
?>