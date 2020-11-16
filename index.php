<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de nueva persona - AZ -</title>
    <link rel="stylesheet" type="text/css" href="./librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="./librerias/alertifyjs/css/themes/default.css">
    <link rel="shortcut icon" href="./imagenes/az.ico">

    <script src="./librerias/jquery-3.5.1.min.js"></script>
    <script src="./js/funciones.js"></script>
    <script src="./js/getFocus.js"></script>
    <script src="./librerias/bootstrap/js/bootstrap.js"></script>
    <script src="./librerias/alertifyjs/alertify.js"></script>
</head>

<body>
    <div class="container">
        <div id="tabla"></div>
    </div>

    <!-- modal para registros nuevos -->

    <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Agrega nueva persona</h4>
                </div>
                <div class="modal-body">
                    <form name="nuevaPersona" id="nuevaPersona">
                        <label>Nombre(s)</label>
                        <input type="text" id="nombre" name="nombre" class="form-control input-sm">
                        <label>Apellido(s)</label>
                        <input type="text" id="apellido" class="form-control input-sm">
                        <label>Nick(apodo)</label>
                        <input type="text" id="nick" class="form-control input-sm">
                        <label>E-mail</label>
                        <input type="text" id="email" class="form-control input-sm">
                        <label>Teléfono</label>
                        <input type="text" id="telefono" class="form-control input-sm">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarNuevo">
                        Agregar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal para edicion de datos -->

    <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
                </div>
                <div class="modal-body">
                    <input type="text" hidden="" id="idpersona">
                    <label>Nombre(s)</label>
                    <input type="text" id="nombreu" class="form-control input-sm">
                    <label>Apellido(s)</label>
                    <input type="text" id="apellidou" class="form-control input-sm">
                    <label>Nick(apodo)</label>
                    <input type="text" id="nicku" class="form-control input-sm">
                    <label>E-mail</label>
                    <input type="text" id="emailu" class="form-control input-sm">
                    <label>Teléfono</label>
                    <input type="text" id="telefonou" class="form-control input-sm">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" id="actualizaDatos" data-dismiss="modal">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<!--funcion para cargar la tabla de datos (tabla)-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#tabla').load('./componentes/tabla.php');
    });
</script>

<!--funcion para cargar la tabla de datos (tabla)-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#guardarNuevo').click(function() {
            nombre = $('#nombre').val();
            apellido = $('#apellido').val();
            nick = $('#nick').val();
            email = $('#email').val();
            telefono = $('#telefono').val();
            agregarDatos(nombre, apellido, nick, email, telefono);
        });
        $('#actualizaDatos').click(function(){
            actualizarDatos();
        });
    });
</script>