<?php
    $PacienteID = $_GET['PacienteID'];
    foreach ($paciente->getDatos() as $pac):
        if($pac['PacienteID']==$PacienteID):
?>
        <div class="container">
            <div class="row content">
                <div class="col-sm-3 sidenav">
                    <br>
                    <img src="Img/patient.png" alt="patient icon" width="50%" height="10%">
                    
                    <h1><a href="<?php printf('%s?PacienteID=%s','Pacientes-Patient.php', $pac['PacienteID']);?>">Paciente</a></h1>

                    <?php
                        foreach ($cita->getDatos() as $cit):
                            if($cit['PacienteID']==$PacienteID):
                    ?>

                    <ul class="nav nav-pills nav-stacked">
                        <li class=""><a href="<?php printf('%s?CitasID=%s','Citas-Cita.php', $cit['CitasID']);?>"><?php echo $cit['Fecha'] ??"Desconocido"?> <?php echo $cit['Hora'] ??"Desconocido"?></a></li>
                    </ul>
                    <br>
    
                    <?php
                        endif;
                        endforeach;
                    ?>
                </div>

                <div class="col-sm-9 form">
                    <h1><?php echo $pac['Nombre'] ??"Desconocido"?> <?php echo $pac['Apellido'] ??"Desconocido"?></h1>
                    <h2>Fecha de Nacimiento: <?php echo $pac['Edad'] ??"Desconocida"?> Sexo: <?php echo $pac['Sex'] ??"Desconocida"?></h2>
                    <h2>(834)145-8562</h2>
                    <h3>ID: <?php echo $pac['PacienteID'] ??"Desconocido"?></h3>
                    <hr>
                    <h6>Dependencia:</h6>
                    <h4><?php echo $pac['Dependencia'] ??"Desconocido"?></h4>
                    <hr>
                    <h3>Expediente:</h3>
                    <iframe src="<?php echo $pac['Expediente'] ??"Desconocido"?>" width="100%" height="500px"></iframe>
                    <hr>
                    <button onclick="window.location.href='<?php printf('%s?PacienteID=%s','Pacientes-ModifyPaciente.php', $pac['PacienteID']);?>'" class="btn btn-warning" >Modificar Expediente</button>
                    <hr>

                    <h3>Notas Medicas:</h3>
                    <hr>

                    <?php
                        foreach ($cita->getDatos() as $cit):
                            if($cit['PacienteID']==$PacienteID):
                    ?>
                    <div>
                        <hr>
                        <h3>Folio: <?php echo $cit['CitasID'] ??"Desconocido"?></h3>
                        <table class="col-sm-12" border="1">
                            <tr align="left">
                                <td colspan="3"><strong>Fecha:</strong> <?php echo $cit['Fecha_Nota'] ??"-"?></td>
                                <td rowspan="10" colspan="6"><strong>Notas:</strong> <?php echo $cit['Notas'] ??"-"?></td>
                            </tr>

                            <tr align="left">
                                <td colspan="3"><strong>Hora:</strong> <?php echo $cit['Hora_Nota'] ??"-"?></td>
                            </tr>

                            <tr align="left">
                                <td colspan="3"><strong>Peso:</strong> <?php echo $cit['Peso'] ??"-"?> Kg</td>
                            </tr>
                            
                            <tr align="left">
                                <td colspan="3"><strong>Talla:</strong> <?php echo $cit['Talla'] ??"-"?></td>
                            </tr>

                            <tr align="left">
                                <td colspan="3"><strong>Tension Arterial:</strong> <?php echo $cit['TenArt'] ??"-"?></td>
                            </tr>

                            <tr align="left">
                                <td colspan="3"><strong>Frecuencia Cardiaca:</strong> <?php echo $cit['FreCar'] ??"-"?></td>
                            </tr>

                            <tr align="left">
                                <td colspan="3"><strong>Frecuencia Respiratoria:</strong> <?php echo $cit['FreResp'] ??"-"?></td>
                            </tr>

                            <tr align="left">
                                <td colspan="3"><strong>Temperatura:</strong> <?php echo $cit['Temp'] ??"-"?></td>
                            </tr>

                            <tr align="left">
                                <td colspan="3"><strong>Circuferencia de Cintura:</strong> <?php echo $cit['CircuCin'] ??"-"?></td>
                            </tr>

                            <tr align="left">
                                <td colspan="3"><strong>Indice de Masa Corporal:</strong> <?php echo $cit['InMC'] ??"-"?></td>
                            </tr>
<<<<<<< HEAD
=======

                            <tr align="left">
                                <td colspan="9"><strong>Observacion:</strong> <?php echo $cit['Obs'] ??"-"?></td>
                            </tr>
                            <tr align="left">
                                <td colspan="9"><strong>Pronostico:</strong> <?php echo $cit['Prono'] ??"-"?></td>
                            </tr>
>>>>>>> 63d4c50e001a59982f46945199fe0566344f8eb7
                        </table> 
                        <?php
                            $MedicoID = $cit['MedicoID'] ?? 1;
                            foreach ($medico->getDatos() as $doc):
                            if($doc['MedicoID']==$MedicoID):
                        ?>
                            <h4><strong>Medico:</strong> Dr. <?php echo $doc['Nombre'] ??"Desconocido"?> <?php echo $doc['Apellido'] ??"Desconocido"?></h4>
                            <br>
                        <?php
                            endif;
                            endforeach;
                        ?>

<<<<<<< HEAD
                        <button onclick="window.location.href='<?php printf('%s?CitasID=%s','Citas-ModifyCita.php', $cit['CitasID']);?>'" class="btn btn-warning">Modificar Notas</button>
=======
                        <button onclick="window.location.href='<?php printf('%s?CitasID=%s','Citas-ModifyCita.php', $cit['CitasID']);?>'">Modificar</button>
>>>>>>> 63d4c50e001a59982f46945199fe0566344f8eb7
                    </div>
                    
                    
                    <?php
                        endif;
                        endforeach;
                    ?>
<<<<<<< HEAD
                    <hr>
                    <br>.
=======
>>>>>>> 63d4c50e001a59982f46945199fe0566344f8eb7
                </div>
            </div>
        </div>
<?php
    endif;
    endforeach;
?>