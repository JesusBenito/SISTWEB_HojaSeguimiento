'use strict' 

/**
* |------------------------------------------------------|
* | Log
* |------------------------------------------------------|
* @author Martin Fuerte
* @date 12-05-2020
*/
$('#iniciarSesion').click(function (e) {
    e.preventDefault(e);
    iniciarSesion();
    iniciarSesion2();
});
function iniciarSesion() {
    let us = $('#usuario').val();
    let pw = $('#pass').val();
    
    if (us == '' || us == null ||
        pw == '' || pw == null) {
            alert("Campos vacios.");
    } else {
        $.ajax({
            url: 'peticiones/log.php',
            type: 'POST',
            // dataType: 'JSON',
            data: {
                us: us,
                pw: pw
            },
            success: function (response) {
                if (response == "exito") {
                    window.location = 'dashboard';
                } else if (response == "fracaso") {
                   
                }
            }
        });
    }
}

function iniciarSesion2() {
    let us = $('#usuario').val();
    let pw = $('#pass').val();
    
    if (us == '' || us == null ||
        pw == '' || pw == null) {
            alert("Campos vacios.");
    } else {
        $.ajax({
            url: 'peticiones/log2.php',
            type: 'POST',
            // dataType: 'JSON',
            data: {
                us: us,
                pw: pw
            },
            success: function (response) {
                if (response == "exito") {
                    window.location = 'index2';
                } else if (response == "fracaso") {
                    alert("Datos Incorrectos");
                }
            }
        });
    }
}
