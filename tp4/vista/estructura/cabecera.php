<?php
    include_once("header.php");
    include_once("../../../config.php");
    $consigna = array ();
    $consigna = [1 => 
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2><p>Crear la capa de los datos, implementando el ORM (Modelo de datos) para la base de datos
    entregada. Recordar que se debe generar al menos, un clase php por cada tabla. Cada clase debe contener
    las variables de instancia y sus metodos get y set; ademas de los metodos que nos permitan seleccionar,
    ingresar, modificar y eliminar los datos de cada tabla.</p></div>", 
    2 => 
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2><p>Crear la capa de control, que nos permitan acceder al ORM (Modelo de datos) y entregarle la
    informacion a las paginas de la interface.</h2><p></p></div>",  
    3 => 
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2><p>Crear   una   pagina   php   “VerAutos.php”,   en   ella   usando   la   capa   de   control   correspondiente
    mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido.
    En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay
    autos cargados</p></div>",  
    4 =>  
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2><p>Crear una pagina 'buscarAuto.php' que contenga un formulario en donde se solicite el numero
    de patente de  un auto, estos datos deberán  ser enviados a una  pagina “accionBuscarAuto.php”  en donde
    usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con
    la   patente   ingresada   y   mostrar   los   datos   en   una   tabla.   También   deberán   mostrar   los   carteles   que   crean
    convenientes en caso de que no se encuentre ningún auto con la patente ingresada.
    Utilizar   css   y   validaciones   javaScript   cuando   crea   conveniente.   Recordar   usar   la   capa   de   control   antes
    generada, no se puede acceder directamente a las clases del ORM</p></div>",  
    5 => 
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2><p>Crear   una   página   'listaPersonas.php'   que   muestre   un   listado   con   las   personas   que   se
    encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
    los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
    generada, no se puede acceder directamente a las clases del ORM.</p></div>",  
    6 =>  
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2><p>Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos
    los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue
    un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se
    pudo  o no  cargar  los datos  de  la persona.  Utilizar  css y  validaciones  javaScript cuando  crea  conveniente.
    Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM</p></div>",  
    7 => 
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2><p>Crear una  página  “NuevoAuto.php”  que  contenga  un  formulario  en el  que  se permita  cargar
    todos   los   datos   de   un   auto   (incluso   su   dueño).   Estos   datos   serán   enviados   a   una   página
    “accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear
    antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un
    link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o
    no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de
    control antes generada, no se puede acceder directamente a las clases del ORM</p></div>",  
    8 => 
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2><p>Crear   una   página   “CambioDuenio.php”   que   contenga   un   formulario   en   donde   se   solicite   el
    numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados
    a   una   página   “accionCambioDuenio.php”   en   donde   se   realice   cambio   del   dueño   del   auto   de   la   patente
    ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
    cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
    antes generada, no se puede acceder directamente a las clases del ORM.</p></div>",  
    9 => 
    "<div class='p-3 bg-info bg-opacity-10 border border-info border-start-0'>
    <h2>Consigna:</h2><p>Crear   una   página   “BuscarPersona.html”   que   contenga   un   formulario   que   permita   cargar   un
    numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php”
    busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo
    formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de
    documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la
    persona.  Utilizar  css  y  validaciones   javaScript  cuando  crea   conveniente.  Recordar   usar  la  capa  de  control
    antes generada, no se puede acceder directamente a las clases del ORM.</p></div>",  
];
?>
<!-- <body> -->
    <div class="row bg-info bg-gradient bg-opacity-50">
        <div class="col">
            <h1 class="text-center">Trabajo practico N°4</h1>
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
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href='<?php echo "/".$VISTA_TP4."/ej1/indexEj1.php";?>'>Ejercicio 1</a></li>
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href='<?php echo "/".$VISTA_TP4."/ej2/indexEj2.php";?>'>Ejercicio 2</a></li>
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href='<?php echo "/".$VISTA_TP4."/ej3/indexEj3.php";?>'>Ejercicio 3</a></li>
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href='<?php echo "/".$VISTA_TP4."/ej4/indexEj4.php";?>'>Ejercicio 4</a></li>
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href='<?php echo "/".$VISTA_TP4."/ej5/indexEj5.php";?>'>Ejercicio 5</a></li>
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href='<?php echo "/".$VISTA_TP4."/ej6/indexEj6.php";?>'>Ejercicio 6</a></li>
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href='<?php echo "/".$VISTA_TP4."/ej7/indexEj7.php";?>'>Ejercicio 7</a></li>
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href='<?php echo "/".$VISTA_TP4."/ej8/indexEj8.php";?>'>Ejercicio 8</a></li>
            <li class="col"><a class="list-group-item list-group-item-action list-group-item-primary" href='<?php echo "/".$VISTA_TP4."/ej9/indexEj9.php";?>'>Ejercicio 9</a></li>
        </ul>
    </div>
<!-- </body> -->