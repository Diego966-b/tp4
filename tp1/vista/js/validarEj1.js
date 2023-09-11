$(document).ready(function() {
    $("#formulario").validate({
        rules: {
            numero: "required",
        },
        messages: {
            numero: {
                required: "Este campo es obligatorio",
            } 
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


