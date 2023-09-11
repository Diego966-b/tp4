<?php
    $consigna = array ();
    $consigna = [1 => 
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2><p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe 
    llamar  a  un  script  –vernumero.php-  y  visualizar  un  mensaje  que  indique  si  el  número 
    enviado  fue:  positivo,  cero  o  negativo.  Añadir  un  link,  a  la  página  que  visualiza  la 
    respuesta, que permita volver a la página anterior.</p></div>", 
    2 => 
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2> <p>Crear una página php que contenga un formulario HTML que permita ingresar las horas 
    de  cursada,  de  la  materia  Programación  Web  Dinámica,  por  cada  día  de  la  semana. 
    Enviar  los  datos  del  formulario  por  el  método  Get  a  otra  página  php  que  los  reciba  y 
    complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que 
    se cursan por semana.</p></div>",  
    3 => 
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2> <p>Crear  una  página  php  que  contenga  un  formulario  HTML  como  el  que  se  indica  en  la 
    imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php 
    que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy 
    nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida. 
    Cambiar el método Post por Get y analizar las diferencias.</p></div>", 
    4 =>  
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2> <p>Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar 
    esos  datos  a  otra  página  en  donde  se  muestren  mensajes  distintos  dependiendo  si  la 
    persona es mayor de edad o no; (si la edad es mayor o igual a 18). 
    Enviar los datos usando el método GET y luego probar de modificar los datos 
    directamente en la url para ver los dos posibles mensajes.</p></div>", 
    5 => 
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2> <p>Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes 
    “radios buttons” se ingrese el nivel de estudio de la persona: 1-no  tiene  estudios,  2-
    estudios  primarios,  3-estudios  secundarios.  Agregar  el  componente  que  crea más 
    apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además 
    un mensaje que indique el tipo de estudios que posee y su sexo.</p></div>", 
    6 =>  
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2> <p>Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes 
    deportes  que  practica  (futbol,  basket,  tennis,  voley)  un  alumno.  Mostrar  en  la  página 
    que procesa el formulario la cantidad de deportes que practica.</p></div>", 
    7 => 
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2> <p>Crear una página con un formulario que contenga dos input de tipo text y un select. En 
    los  inputs  se  ingresarán  números  y  el  select  debe  dar  la  opción  de  una  operación 
    matemática  que  podrá  resolverse  usando  los  números  ingresados.  En  la  página  que 
    procesa  la  información  se  debe  mostrar  por  pantalla  la  operación  seleccionada,  cada 
    uno  de  los  operandos  y  el  resultado  obtenido  de  resolver  la  operación.  Ejemplo  del 
    formulario: .</p></div>", 
    8 => 
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2> <p>La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en 
    función de la edad y de la condición de estudiante del cliente. Desea que sean los propios 
    clientes los que puedan calcular el valor de sus entradas a través de una página web. Si 
    es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual 
    de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un 
    formulario que solicite la edad y permita ingresar si se trata de un  estudiante o no. Con 
    un  botón  enviar  los  datos  a  un  script  encargado  de  realizar  el  cálculo  y  visualizarlo.  
    Agregar un botón para limpiar el formulario y volver a consultar.</p></div>"
];
?>
<!-- <body> -->
    <div class="row bg-info bg-gradient bg-opacity-50">
        <div class="col">
            <h1 class="text-center">Trabajo practico N°1</h1>
        </div>
        <div class="row ">
            <div class="col">
                <h1 class="text-center ">Ejercicios:</h1>
            </div>
        </div>       
    </div>
    </div>
    <div class="row">
        <ul class="list-group list-group-horizontal">
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href="../ej1/indexEj1.php">Ejercicio 1</a></li>
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href="../ej2/indexEj2.php">Ejercicio 2</a></li>
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href="../ej3/indexEj3.php">Ejercicio 3</a></li>
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href="../ej4/indexEj4.php">Ejercicio 4</a></li>
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href="../ej5/indexEj5.php">Ejercicio 5</a></li>
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href="../ej6/indexEj6.php">Ejercicio 6</a></li>
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href="../ej7/indexEj7.php">Ejercicio 7</a></li>
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href="../ej8/indexEj8.php">Ejercicio 8</a></li>
        </ul>
    </div>
    
<!-- </body> -->