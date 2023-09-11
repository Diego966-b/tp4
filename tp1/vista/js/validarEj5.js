// Metodo soloLetras
$.validator.addMethod("soloLetras", function(value, element) {
    return this.optional(element) || /^[a-zA-Z\sáéíóúÁÉÍÓÚñÑüÜ]+$/i.test(value);
}, "Solo se permiten letras en este campo");
// Metodo noDecimal
$.validator.addMethod("noDecimal", function(value, element) {
    return this.optional(element) || /^[0-9]+$/.test(value);
  }, "Por favor, ingresa un número entero sin decimales");
  
$(document).ready(function() {
    $("#formulario").validate({
        rules: {
            nombre: {
                required: true,
                soloLetras: true,
            },
            apellido: {
                required: true,
                soloLetras: true,
            },
            edad: {
                required: true,
                min: 0,
                noDecimal: true,
            },
            direccion: {
                required: true,
            },
            sexo: {
                required: true,
            },
            estudios: {
                required: true,
            }
        },
        messages: {
            nombre: {
                required: "Este campo es obligatorio",
                soloLetras: "Solo puede haber letras en este campo",
            },
            apellido: {
                required: "Este campo es obligatorio",
                soloLetras: "Solo puede haber letras en este campo",
            },
            edad: {
                required: "Este campo es obligatorio",
                min: "La edad no puede ser negativa",
                noDecimal: "La edad no puede contener decimales",
            },            
            direccion: {
                required: "Este campo es obligatorio",
            }, 
            estudios: {
                required: "Este campo es obligatorio",
            }, 
            sexo: {
                required: "Este campo es obligatorio",
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


