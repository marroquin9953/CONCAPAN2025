var usu_id = $('#usu_idx').val();

$(document).ready(function(){
    $.post("../../controller/usuario.php?op=mostrar", { usu_id : usu_id }, function (data) {
        data = JSON.parse(data);
        $('#usu_nom').val(data.usu_nom);
        $('#usu_apep').val(data.usu_apep);
        $('#usu_apem').val(data.usu_apem);
        $('#usu_correo').val(data.usu_correo);
        $('#usu_telf').val(data.usu_telf);
        $('#usu_pass').val(data.usu_pass);
        $('#usu_sex').val(data.usu_sex).trigger("change");
    });
});

$(document).ready(function () {
    verificarEstadoEncuesta();
});

function verificarEstadoEncuesta() {
    $.post("../../controller/usuario.php?op=mostrar", { usu_id: usu_id }, function (data) {
        var usuario = JSON.parse(data);

        // Verificar si el usuario ya completó la encuesta
        if (usuario.est_encuesta == 1 && usuario.rol_id == 1) {
            // Mostrar mensaje de agradecimiento y ocultar encuesta
            $('#mensaje-agradecimiento').show();
            $('#form-encuesta').hide();
        } else {
            // Mostrar la encuesta
            $('#mensaje-agradecimiento').hide();
            $('#form-encuesta').show();
        }
    });
}

$(document).on("click", "#btnactualizar", function(e) {
    e.preventDefault(); // Prevenir comportamiento por defecto

    // Mapeo de campos con nombres legibles
    const nombresPreguntas = {
        p_1_c: "1",
        p_2_c: "2",
        p_3_c: "3",
        p_4_t: "4",
        p_5_c: "5",
        p_6_c: "6",
        p_7_c: "7",
        p_8_t: "8",
        p_9_c: "9",
        p_10_c: "10",
        p_11_t: "11",
        p_12_c: "12",
        p_13_c: "13"
    };

    let camposVacios = [];
    Object.keys(nombresPreguntas).forEach(function(campo) {
        let valor = $(`#${campo}`).val().trim();
        if (!valor) { // Si el valor está vacío o solo contiene espacios
            camposVacios.push(nombresPreguntas[campo]);
        }
    });

    if (camposVacios.length > 0) {
        // Mostrar error al usuario con los nombres legibles
        Swal.fire({
            title: 'Error',
            text: `Por favor, llena todos los campos antes de enviar la encuesta. Las preguntas vacías son: ${camposVacios.join(', ')}`,
            icon: 'error',
            confirmButtonText: 'OK'
        });
        return; // Detener envío
    }

    // Preparar datos para enviar
    const datos = {
        usu_id: usu_id,
        p_1_c: $('#p_1_c').val().trim(),
        p_2_c: $('#p_2_c').val().trim(),
        p_3_c: $('#p_3_c').val().trim(),
        p_4_t: $('#p_4_t').val().trim(),
        p_5_c: $('#p_5_c').val().trim(),
        p_6_c: $('#p_6_c').val().trim(),
        p_7_c: $('#p_7_c').val().trim(),
        p_8_t: $('#p_8_t').val().trim(),
        p_9_c: $('#p_9_c').val().trim(),
        p_10_c: $('#p_10_c').val().trim(),
        p_11_t: $('#p_11_t').val().trim(),
        p_12_c: $('#p_12_c').val().trim(),
        p_13_c: $('#p_13_c').val().trim(),
    };

    console.log("Datos enviados al servidor:", datos);

    // Enviar datos al backend
    $.post("../../controller/usuario.php?op=update_encuesta", datos)
        .done(function(data) {
            console.log("Respuesta del servidor:", data);

            // Mensaje de éxito
            Swal.fire({
                title: 'Correcto!',
                text: 'Se completó la encuesta',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            }).then(() => {
                // Llamar a la función de verificación después de completar
                verificarEstadoEncuesta();
            });
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            console.error("Error al enviar la solicitud:", textStatus, errorThrown);
            console.error("Respuesta del servidor:", jqXHR.responseText);

            // Mostrar error
            Swal.fire({
                title: 'Error!',
                text: 'No se pudo completar la encuesta. Inténtalo de nuevo.',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
        });
});
