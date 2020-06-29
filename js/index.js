$("#guardarProyecto").click(function (e) {
    e.preventDefault();
    guardarProyecto();
});

function guardarProyecto() {

    let tipo_proyecto = $("#tipo_proyecto").val();
    let nombre_proyecto = $("#nombre_proyecto").val();
    let fecha_entrega = $("#fecha_entrega").val();
    let estatus = $("#estatus").val();
    let colaborador = $("#colaborador").val();

    if (
        tipo_proyecto ==""||
        tipo_proyecto == null||
        nombre_proyecto ==""||
        nombre_proyecto == null
    ) {
        alert("Error: Revise que los campos esten llenos")
    }else{


        $.ajax({
            url: "../peticiones/nuevoProyecto.php",
            type: "POST",
            data: {
                tipo_proyecto: tipo_proyecto,
                nombre_proyecto: nombre_proyecto,
                fecha_entrega: fecha_entrega,
                estatus: estatus,
                colaborador: colaborador
            },
            success: function(response) {
                alert("Proyecto creado exitosamente");
                window.location = "";
            }
        });

    }
}

/**
 * |------------------------------------------------------|
 * | Eliminar Proyecto
 * |------------------------------------------------------|
 * @author Martin Fuerte
 * @date 25-04-2020
 */
$(".bajaProyecto").click(function () {
    var id_proyecto = $(this).data('idproyecto');

    var r = confirm("¿ Desea eliminar el proyecto"  + " ?");
    if (r == true) {
        $.ajax({
            url: '../peticiones/eliminarProyecto.php',
            type: 'POST',
            // dataType: 'JSON',
            data: {
                id_proyecto: id_proyecto,
            },
            success: function (response) {
                alert("Proyecto eliminado con ID " + id_proyecto);
                window.location = '';
            }
        });
    }
});





/**
 * |------------------------------------------------------|
 * | Guardar colaborador
 * |------------------------------------------------------|
 * @author Jesus Benito
 * @date 25-02-2020
 */
$("#guardar_colaborador").click(function (e) {
    e.preventDefault();
    guardaColaborador();
});


function guardaColaborador() {

    let nombre = $("#nombre").val();
    let ap_paterno = $("#ap_paterno").val();
    let ap_materno = $("#ap_materno").val();
    let telefono = $("#telefono").val();
    let numero_usuario = $("#numero_usuario").val();
    let correo = $("#correo").val();
    let fecha_nacimiento = $("#fecha_nacimiento").val();
    let area = $("#area").val();
    let direccion = $("#direccion").val();


    if ($("#nombre").val().length < 1 ||
        $('#ap_paterno').val().length < 1 ||
        $('#ap_materno').val().length < 1 ||
        $('#telefono').val().length < 1 ||
        $('#numero_usuario').val().length < 1 ||
        $('#correo').val().length < 1 ||
        $('#fecha_nacimiento').val().length < 1 ||
        $('#area').val().length < 1 ||
        $('#direccion').val().length < 1) {
        alert("Campos vacios")
    } else {

        $.ajax({
            url: "../peticiones/nuevoColaborador.php",
            type: "POST",
            data: {
                nombre: nombre,
                ap_paterno: ap_paterno,
                ap_materno: ap_materno,
                telefono: telefono,
                numero_usuario: numero_usuario,
                correo: correo,
                fecha_nacimiento: fecha_nacimiento,
                area: area,
                direccion: direccion
            },
            success: function (response) {
                alert("Colaborador Registrado Correctamente");
                window.location = "";
            }
        });

    }
}


$(".bajaColaborador").click(function () {
    var id_colaborador = $(this).data('idcolaborador');
    var name = $(this).data('colaborador');
    var r = confirm("¿ Desea eliminar el colaborador " + name + " ?");
    if (r == true) {
        $.ajax({
            url: '../peticiones/eliminarColaborador.php',
            type: 'POST',
            // dataType: 'JSON',
            data: {
                id_colaborador: id_colaborador,
            },
            success: function (response) {
                alert("Colaborador eliminado con ID " + id_colaborador);
                window.location = '';
            }
        });
    }
});

/**
 * |------------------------------------------------------|
 * | llena modal colaboradores
 * |------------------------------------------------------|
 * @author Martin Fuerte
 * @date 25-02-2020
 */
$('#modificarColaborador').click(function (e)  {
        var id_colaborador = $(this).data('idcolaborador');
        $.ajax({
            url: '../peticiones/cargaColaboradores.php',
            type: 'POST',
            dataType: 'json',
            data:{id:id_colaborador},
        }).done(function(respuesta) {
            $('#txtUsuario').val(respuesta.usuario);
            $('#txtContra').val(respuesta.contra);
            $('#txtNombre').val(respuesta.nombre);
            $('#txtApellidoP').val(respuesta.apellido_p);
            $('#txtApellidoM').val(respuesta.apellido_m);
            $('#txtEdad').val(respuesta.edad);
            $('#txtCorreo').val(respuesta.correo);
            $('#txtTelefono').val(respuesta.telefono);
            $('#txtCelular').val(respuesta.celular);
            $('#txtCalle').val(respuesta.calle);
            $('#txtNoExterior').val(respuesta.no_exterior);
            $('#txtNoInterior').val(respuesta.no_interior);
            $('#txtColonia').val(respuesta.colonia);
            $('#txtMunicipio').val(respuesta.municipio);
            $('#txtEstado').val(respuesta.estado);
            $('#txtCodigoPostal').val(respuesta.codigo_postal);
        });
    });





/**
 * |------------------------------------------------------|
 * | Actualiza colaborador
 * |------------------------------------------------------|
 * @author Martin Fuerte
 * @date 25-02-2020
 */
$(".modificarColaborador").click(function (e) {
    e.preventDefault();
    actualizaColaborador();
});

function actualizaColaborador() {

    if ($("#nombrem").val().length < 1 ||
        $('#ap_paternom').val().length < 1 ||
        $('#ap_maternom').val().length < 1 ||
        $('#telefonom').val().length < 1 ||
        $('#numero_usuariom').val().length < 1 ||
        $('#correom').val().length < 1 ||
        $('#fecha_nacimientom').val().length < 1 ||
        $('#aream').val().length < 1 ||
        $('#direccionm').val().length < 1) {
        alert("Campos vacios")
    } else {
        $.ajax({
            url: '../peticiones/actualizaColaborador.php"',
            type: 'POST',
            data: {

                'nombre': $('#nombrea').val(),
                'ap_materno': $('#ap_paternoa').val(),
                'ap_paterno': $('#ap_paternoa').val(),
                'telefono': $('#telefonoa').val(),
                'numero_usuario': $('#numero_usuarioa').val(),
                'correo': $('#correoa').val(),
                'fecha_nacimiento': $('#fecha_nacimientoa').val(),
                'area': $('#areaa').val(),
                'direccion': $('#direcciona').val(),
            },
            success: function (response) {
                alert("El Colaborador:  " + nombre + " se ha actualizado con exito");
                window.location = '';
            }
        });
    }

}

/**
 * |------------------------------------------------------|
 * | Guarda Estatus
 * |------------------------------------------------------|
 * @author Jesus Benito
 * @d
 *
 */
$('#guardar_estatus').click(function (e)  {
    e.preventDefault();
    nuevoEstatus();
});
function nuevoEstatus() {
    var estatus = $('#estatus').val();

    if (estatus == '' || estatus == null) {
        alert("Error: Revise que los campos estes llenos.")
    } else {
        $.ajax({
            data : {
                estatus: estatus
            },
            url: "../peticiones/nuevoEstatus.php",
            dataType: 'JSON',
            type: 'POST',
            success: function (response) {
                alert("Estatus Agregado ");
                window.location = "";
            }
        });
    }
}
/**
 * |------------------------------------------------------|
 * | Elimina estatus
 * |------------------------------------------------------|
 * @author Jesus Benito
 * @d
 *
 **/

$(".bajaEstatus").click(function () {
    var id_estatus = $(this).data('idestatus');

    var r = confirm("¿ Desea eliminar el Estatus " + "?");
    if (r == true) {
        $.ajax({
            url: '../peticiones/eliminarEstatus.php',
            type: 'POST',
            // dataType: 'JSON',
            data: {
                id_estatus: id_estatus,
            },
            success: function (response) {
                alert("Estatus eliminado con ID " + id_estatus);
                window.location = '';
            }
        });
    }
});




/**
 * |------------------------------------------------------|
 * | Guarda area
 * |------------------------------------------------------|
 * @author Jesus Benito
 * @d
 *
 */
$('#guardar_area').click(function (e)  {
    e.preventDefault();
    nuevaArea();
});
function nuevaArea() {
    var nombre_area = $('#nombre_area').val();

    if (nombre_area == '' || nombre_area == null) {
        alert("Error: Revise que los campos estes llenos.")
    } else {
        $.ajax({
            data : {
                nombre_area: nombre_area
            },
            url: "../peticiones/nuevaArea.php",
            dataType: 'JSON',
            type: 'POST',
            success: function (response) {
                alert("Area Agregada "+response);
                window.location = "";
            }
        });
    }
}

/**
 * |------------------------------------------------------|
 * | Elimina area
 * |------------------------------------------------------|
 * @author Jesus Benito
 * @d
 *
 **/

$(".bajaArea").click(function () {
    var id_area = $(this).data('idarea');
    var area = $(this).data('area');

    var r = confirm("¿ Desea eliminar el area: " + area + " ?");
    if (r == true) {
        $.ajax({
            url: '../peticiones/eliminarArea.php',
            type: 'POST',
            // dataType: 'JSON',
            data: {
                id_area: id_area,
            },
            success: function (response) {
                alert("Area eliminada con ID " + id_area);
                window.location = '';
            }
        });
    }
});


/**
 * |------------------------------------------------------|
 * | Guarda cliente
 * |------------------------------------------------------|
 * @author Jesus Benito
 * @d
 *
 */
$('#guardar_cliente').click(function (e)  {
    e.preventDefault();
    nuevoCliente();
});
function nuevoCliente() {
    var cliente = $('#cliente').val();

    if (cliente == '' || cliente == null) {
        alert("Error: Revise que los campos estes llenos.")
    } else {
        $.ajax({
            data : {
                cliente: cliente
            },
            url: "../peticiones/nuevoCliente.php",
            dataType: 'JSON',
            type: 'POST',
            success: function (response) {
                alert("Cliente creado exotisamente ");
                window.location = "";
            }
        });
    }
}




