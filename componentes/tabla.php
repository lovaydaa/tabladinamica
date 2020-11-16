<!--Llamamos al archivo conexion.php-->
<?php
    require_once "../php/conexion.php";
    $conexion = conexion();
?>

<div class="row">
    <div class="col-sm-12">
        <h2>Nueva persona AZ</h2>
        <table class="table table-hover table-condensed table-bordered">
            <caption>
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                    Agregar nuevo
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
            </caption>
            <tr>
                <th>Nombre(s) <button class="btn glyphicon glyphicon-sort-by-alphabet"></button></th>
                <th>Apellido(s) <button class="btn glyphicon glyphicon-sort-by-alphabet"></button></th>
                <th>Nick (apodo) <button class="btn glyphicon glyphicon-sort-by-alphabet"></button></th>
                <th>E-mail</th>
                <th>Teléfono</th>
                <th class="text-center">Editar</th>
                <th class="text-center">Eliminar</th>
            </tr>

            <!-- Insertamos los datos de la base mediante PHP -->
            <?php
                $sql = "SELECT id, nombre, apellido, nick, email, telefono FROM t_persona";
                $result = mysqli_query($conexion, $sql);

                while ($ver = mysqli_fetch_row($result)) {
                    
                    $datos = $ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5];
            ?>

            <tr>
                <td><?php echo $ver[1]?></td>
                <td><?php echo $ver[2]?></td>
                <td><?php echo $ver[3]?></td>
                <td><?php echo $ver[4]?></td>
                <td><?php echo $ver[5]?></td>
                <td class="text-center">
                    <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaForm('<?php echo $datos?>')"></button>
                </td>
                <td class="text-center">
                    <button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $ver[0]?>')"></button>
                </td>
            </tr>
            <?php
                } //cierra bucle while
            ?>
        </table>
    </div>
</div>