<?php
/*
Este index esta en la carpeta Menu, que no se si esta bien. 
Si no esta aca, no funcionan los href de header (bootstrap y demas) para los ejercicios y para el menu al mismo tiempo.
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>MENU TP1</title>
    <?php include_once("../estructura/header.php");?>
</head>
<body>
    <?php 
    include_once("../estructura/cabecera.php");
    include_once("../estructura/lateral.php");
    ?>
    <a href ="../../../">Volver Atras</a>
    <?php include_once("../estructura/pie.php");?>
</body>
</html>