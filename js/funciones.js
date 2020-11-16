//Funcion para agregar nuevos datos hacia la base de datos
function agregarDatos(nombre, apellido, nick, email, telefono) {
    cadena = "nombre=" + nombre + "&apellido=" + apellido + "&nick=" + nick + "&email=" + email + "&telefono=" + telefono;

    $.ajax({
        type: "POST",
        url: "../php/agregarDatos.php",
        data: cadena,
        success: function (r) {
            if (r = 1) {
                $('#tabla').load('./componentes/tabla.php');
                alertify.success("Agregado con exito.");
                $("#nuevaPersona")[0].reset(); //Borra los campos del formulario "Agrega nueva persona"
            } else {
                alertify.error("Fallo en el servidor.");
            }
        }
    });
}

//Funcion para llenar datos al formulario desde la base de datos
function agregaForm(datos) {
    //alert(datos);

    d = datos.split('||');

    $('#idpersona').val(d[0]);
    $('#nombreu').val(d[1]);
    $('#apellidou').val(d[2]);
    $('#nicku').val(d[3]);
    $('#emailu').val(d[4]);
    $('#telefonou').val(d[5]);

}

//Funcion para actualizar datos a la base de datos
function actualizarDatos() {
    id = $('#idpersona').val();
    nombre = $('#nombreu').val();
    apellido = $('#apellidou').val();
    nick = $('#nicku').val();
    email = $('#emailu').val();
    telefono = $('#telefonou').val();

    cadena = "id=" + id + "&nombre=" + nombre + "&apellido=" + apellido + "&nick=" + nick + "&email=" + email + "&telefono=" + telefono;

    $.ajax({
        type: "POST",
        url: "../php/actualizarDatos.php",
        data: cadena,
        success: function (r) {
            if (r = 1) {
                $('#tabla').load('./componentes/tabla.php');
                alertify.success("Actualizado con exito.");
            } else {
                alertify.error("Fallo en el servidor.");
            }
        }
    });
}

//Funcion que pregunta si se quiere eliminar datos de la tabla
function preguntarSiNo(id) {
    alertify.confirm('Eliminar datos', '¿Esta seguro de eliminar este registro?',
    function() { eliminarDatos(id) },
    function() { alertify.error('Cancelado') });
}

//Funcion eliminar datos
function eliminarDatos(id){
    cadena = "id=" + id;
    $.ajax({
        type: "POST",
        url:"../php/eliminarDatos.php",
        data: cadena,
        success: function(r){
            if(r=1){
                $('#tabla').load('./componentes/tabla.php');
                alertify.success("¡Registro eliminado correctamente!");
            }else{
                alertify.error("¡Fallo en el servidor!");
            }
        }
    });
}