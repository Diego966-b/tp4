$(document).ready(function() {
    $("#formulario").validate({
        rules: {
            NroDni: {
                required: true,
                min: 10000000,  // Valor mínimo de 10^7 (7 cifras)
                max: 99999999,  // Valor máximo de 10^8 - 1 (8 cifras)
            }   
        },
        messages: {
            NroDni: {
                required: "Este campo es obligatorio",
                min: "El DNI debe tener como minimo 8 cifras",
                max: "El DNI debe tener como maximo 8 cifras",
            },
        },
        errorElement: "span", // Cambia el elemento utilizado para mostrar mensajes de error a 'span'
        errorClass: "text-danger", // Clase de Bootstrap para el color de texto rojo
        errorPlacement: function(error, element) 
        {
            // Personaliza la ubicación del mensaje de error
            error.insertAfter(element); // Coloca el mensaje de error después del elemento
        }    
    });
});

