$(document).ready(function() {
    $("#formulario").validate({
        rules: {
            lunes:{
                required: true,
                min: 0,
            }, 
            martes:{
                required: true,
                min: 0,
            },
            miercoles: {
                required: true,
                min: 0,
            },
            jueves: {
                required: true,
                min: 0,
            },
            viernes: {
                required: true,
                min: 0,
            },
        },
        messages: {
            lunes: {
                required: "Este campo es obligatorio",
                min: "No puede cursar horas negativas",
            },
            martes: {
                required: "Este campo es obligatorio",
                min: "No puede cursar horas negativas",
            },
            miercoles: {
                required: "Este campo es obligatorio",
                min: "No puede cursar horas negativas",
            },
            jueves: {
                required: "Este campo es obligatorio",
                min: "No puede cursar horas negativas",
            },
            viernes: {
                required: "Este campo es obligatorio",
                min: "No puede cursar horas negativas",
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


