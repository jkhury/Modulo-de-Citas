<?php
    $CitasID = $_GET['CitasID'];
    foreach ($cita->getDatos() as $cit):
        if($cit['CitasID']==$CitasID):
?>
        <div class="container">
            <div class="row content">
                <div class="col-sm-3 sidenav">
                    <br>
                    <img src="Img/patient.png" alt="patient icon" width="50%" height="10%">

                    <?php
                        $PacienteID = $cit['PacienteID'];
                        foreach ($paciente->getDatos() as $pac):
                        if($pac['PacienteID']==$PacienteID):
                    ?>
                    <h1><a href="<?php printf('%s?PacienteID=%s','Pacientes-Patient.php', $pac['PacienteID']);?>">Paciente</a></h1>
                    <?php
                        endif;
                        endforeach;
                    ?>

                    <?php
                        foreach ($cita->getDatos() as $citnav):
                            if($citnav['PacienteID']==$PacienteID):
                    ?>

                    <ul class="nav nav-pills nav-stacked">
                        <li class=""><a href="<?php printf('%s?CitasID=%s','Citas-Cita.php', $citnav['CitasID']);?>"> <?php echo $citnav['Fecha'] ??"Desconocido"?> <?php echo $citnav['Hora'] ??"Desconocido"?></a></li>
                    </ul>
                    <br>
    
                    <?php
                        endif;
                        endforeach;
                    ?>
                    <br>
                </div>

                <div class="col-sm-9 form">
                    <h3>Folio: <?php echo $cit['CitasID'] ??"Desconocido"?></h3>
                    <?php
                        $PacienteID = $cit['PacienteID'];
                        foreach ($paciente->getDatos() as $pac):
                        if($pac['PacienteID']==$PacienteID):
                    ?>
                    <h1><?php echo $pac['Nombre'] ??"Desconocido"?> <?php echo $pac['Apellido'] ??"Desconocido"?></h1>
                    <?php
                        endif;
                        endforeach;
                    ?>
                    
                    <h2><?php echo $cit['Fecha'] ??"Desconocido"?> <?php echo $cit['Hora'] ??"Desconocido"?></h2>
                    <hr>
                    <?php
                        $MedicoID = $cit['MedicoID'] ?? 1;
                        foreach ($medico->getDatos() as $doc):
                        if($doc['MedicoID']==$MedicoID):
                    ?>
                        <h4>Dr. <?php echo $doc['Nombre'] ??"Desconocido"?> <?php echo $doc['Apellido'] ??"Desconocido"?></h4>
                        <br>
                        <h4><?php echo $doc['Esp'] ??"Desconocido"?></h4>
                    <?php
                        endif;
                        endforeach;
                    ?>
                    <hr>
                    <h1>Nota Medica:</h1>
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
                    <button class="btn btn-info" onclick="window.location.href='<?php printf('%s?CitasID=%s','Citas-ModifyCita.php', $cit['CitasID']);?>'" class="btn btn-success" >Modificar</button>

                    <hr>
                    <br>.
                </div>
                
            </div>
        </div>

<?php
    endif;
    endforeach;
?>