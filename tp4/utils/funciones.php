<?php
    /**
     * Retorna un array con los datos enviados. Prioriza POST sobre GET.
     * @return array
     */
    function devolverDatos ()
    {
        $colDatos = array ();
        if (!empty($_POST))
        {
            $colDatos = $_POST;
        }
        else
        {
            if (!empty($_GET))
            {
                $colDatos = $_GET;
            }
        }
        if (count($colDatos))
        {
            foreach ($colDatos as $indice => $valor)
            {
                if ($valor == "")
                {
                    $colDatos [$indice] = 'null';
                }
            }
        }
        return $colDatos;
    }
    /**
     * Muestra un obj autos. 
     * Asume que lo estas llamando dentro de <table>
     * @param Autos $objAuto
     */
    function mostrarAuto ($objAuto)
    {
        //echo "<br>";  
        echo '<tr><td style="width:500px;">Marca: '.$objAuto->getMarca().'</td></tr>';
        echo '<tr><td style="width:500px;">Modelo: '.$objAuto->getModelo().'</td></tr>';
        echo '<tr><td style="width:500px;">Patente: '.$objAuto->getPatente().'</td></tr>';
    }
?>