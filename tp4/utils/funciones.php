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
?>