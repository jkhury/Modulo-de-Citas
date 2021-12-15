<?php
    require ('PHP2/ConexionBD.php');
    require ('PHP2/MedicosBD.php');

    $bd = new ConexionBD();

    $medico = new Medico($bd);
?>