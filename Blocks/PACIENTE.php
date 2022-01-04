<?php
    $PacienteID = $_GET['PacienteID'];
    foreach ($paciente->getDatos() as $pac):
        if($pac['PacienteID']==$PacienteID):
?>
                <div class="col-sm-9 form">
                    <h1><?php echo $pac['Nombre'] ??"Desconosido"?> <?php echo $pac['Apellido'] ??"Desconocido"?></h1>
                    <h2>Edad: <?php echo $pac['Edad'] ??"Desconosida"?></h2>
                    <h2>(834)145-8562</h2>
                    <h3>ID: <?php echo $pac['PacienteID'] ??"Desconosido"?></h3>
                    <hr>
                    <h6>Dependencia:</h6>
                    <h4><?php echo $pac['Dependencia'] ??"Desconosido"?></h4>
                    <hr>
                    <h3>Expediente:</h3>
                    <iframe src="<?php echo $pac['Expediente'] ??"Desconosido"?>" width="100%" height="500px"></iframe>
                    <hr>
                    <button onclick="window.location.href='<?php printf('%s?PacienteID=%s','Pacientes-ModifyPaciente.php', $pac['PacienteID']);?>'">Modificar</button>
                    <hr>

                </div>
            </div>
        </div>
<?php
    endif;
    endforeach;
?>