// Metodo soloLetras
$.validator.addMethod("soloLetras", function(value, element) {
    return this.optional(element) || /^[a-zA-Z\sáéíóúÁÉÍÓÚñÑüÜ]+$/i.test(value);
}, "Solo se permiten letras en este campo");
// Metodo noDecimal
$.validator.addMethod("noDecimal", function(value, element) {
    return this.optional(element) || /^[0-9]+$/.test(value);
  }, "Ingrese un número entero sin decimales");
  
$(document).ready(function() {
    $("#formulario").validate({
        rules: {
            Nombre: {
                required: true,
                soloLetras: true,
                
            },
            Apellido: {
                required: true,
                soloLetras: true,
            },
            NroDni: {
                required: true,
                noDecimal: true,
                min: 10000000, 
                max: 99999999, 
            },
            fechaNac: {
                required: true,
            },
            Domicilio: {
                required: true,
            },
            Telefono: {
                required: true,
                noDecimal: true,
            },
        },
        messages: {
            Nombre: {
                required: "Este campo es obligatorio",
                soloLetras: "Solo puede haber letras en este campo",
            },
            Apellido: {
                required: "Este campo es obligatorio",
                soloLetras: "Solo puede haber letras en este campo",
            },
            NroDni: {
                required: "Este campo es obligatorio",
                min: "El DNI debe tener como minimo 8 cifras",
                max: "El DNI debe tener como maximo 8 cifras",
            },
            fechaNac: {
                required: "Este campo es obligatorio",
            },
            Domicilio: {
                required: "Este campo es obligatorio",
            }, 
            Telefono: {
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


