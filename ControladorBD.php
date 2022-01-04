<?php
    require ('PHP2/ConexionBD.php');
    require ('PHP2/MedicosBD.php');
    require ('PHP2/PacientesBD.php');
    require ('PHP2/CitasBD.php');
    
    $bd = new ConexionBD();

    $medico = new Medico($bd);

    $paciente = new Paciente($bd);
    
    $cita = new Cita($bd);
?>