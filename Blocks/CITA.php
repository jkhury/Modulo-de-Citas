<?php
    $CitasID = $_GET['CitasID'];
    foreach ($cita->getDatos() as $cit):
        if($cit['CitasID']==$CitasID):
?>
                <div class="col-sm-9 form">
                    <h3>Folio: <?php echo $cit['CitasID'] ??"Desconosido"?></h3>
                    <?php
                        $PacienteID = $cit['PacienteID'];
                        foreach ($paciente->getDatos() as $pac):
                        if($pac['PacienteID']==$PacienteID):
                    ?>
                    <h1><?php echo $pac['Nombre'] ??"Desconosido"?> <?php echo $pac['Apellido'] ??"Desconocido"?></h1>
                    <?php
                        endif;
                        endforeach;
                    ?>
                    
                    <h2><?php echo $cit['Fecha'] ??"Desconosido"?> <?php echo $cit['Hora'] ??"Desconosido"?></h2>
                    <hr>
                    <?php
                        $MedicoID = $cit['MedicoID'] ?? 1;
                        foreach ($medico->getDatos() as $doc):
                        if($doc['MedicoID']==$MedicoID):
                    ?>
                        <h4>Dr. <?php echo $doc['Nombre'] ??"Desconosido"?> <?php echo $doc['Apellido'] ??"Desconosido"?></h4>
                        <br>
                        <h4><?php echo $doc['Esp'] ??"Desconosido"?></h4>
                    <?php
                        endif;
                        endforeach;
                    ?>
                    <hr>
                    <h3>Notas:</h3>
                    <h4><?php echo $cit['Notas'] ??"Desconosido"?></h4>
                    <hr>
                    <button onclick="window.location.href='Citas-ModifyCita.php'">Modificar</button>
                </div>
            </div>
        </div>

<?php
    endif;
    endforeach;
?>