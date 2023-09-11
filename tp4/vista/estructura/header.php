<?php
    /* Estas direcciones son relativas a donde se incluye al header, no a este archivo */
    /* Método que recupera datos del POST/GET */
    // include_once("../../utils/funciones.php");  
    /* Archivo Header */
    include_once("../../../config.php");
?>
<!-- <head> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- jquery: -->
    <script src= <?php echo "/".$UTILS_TP4."/jquery/jquery-3.7.0.min.js"?>></script>
    <!-- Bootstrap css: -->
    <link type = "text/css" rel="stylesheet" href= <?php echo "/".$UTILS_TP4."/bootstrap/css/bootstrap.min.css"?>>
    <!-- Bootstrap js: -->
    <script src=<?php echo "/".$UTILS_TP4."/bootstrap/js/bootstrap.min.js" ?>></script>
    <!-- jquery validate: -->
    <script type="text/javascript" src= <?php echo "/".$UTILS_TP4."/jqueryValidate/jquery.validate.js" ?>></script>
<!-- </head> -->

<!--  
    CDNS: 
    jquery:
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    jquery validate:
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    Bootstrap:
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
-->

<!-- 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    jquery:
    <script src="../../utils/jquery/jquery-3.7.0.min.js"></script>
    <Bootstrap css:
    <link href="../../utils/bootstrap/css/bootstrap.min.css" type = "text/css" rel="stylesheet" >
    Bootstrap js: 
    <script src="../../utils/bootstrap/js/bootstrap.min.js"></script>
    jquery validate: 
    <script type="text/javascript" src="../../utils/jqueryValidate/jquery.validate.js"></script>
-->
