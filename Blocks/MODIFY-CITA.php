<?php
    $CitasID = $_GET['CitasID'];

	$medico_obtension = $medico->getDatos();

    foreach ($cita->getDatos() as $cit):
        if($cit['CitasID']==$CitasID):

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['submit'])){
            $cita->newDatos($_POST['doctor'], $_POST['fecha'], $_POST['hora'], $_POST['fechan'], $_POST['horan'], $_POST['peso'], $_POST['talla'], $_POST['cc'], $_POST['inmc'], $_POST['temp'], $_POST['ta'], $_POST['fc'], $_POST['fr'], $_POST['notes'], $_POST['obs'], $_POST['prono'], $_POST['id']);
        }
    }
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
                    <form method="post" enctype="multipart/form-data">
						<h1>Cita:</h1>
                        <h3>Folio: <?php echo $cit['CitasID'] ??"Desconocido"?></h3>
                        <input type="hidden" name="id" value="<?php echo $cit['CitasID'] ??"Desconocido"?>">

                        <label for="doctor">Medico:</label>
						<select name="doctor">
							<?php
								$MedicoID = $cit['MedicoID'] ?? 1;
								foreach ($medico->getDatos() as $doc):
								if($doc['MedicoID']==$MedicoID):
							?>
								<option value="<?php echo $doc['MedicoID'] ??"Desconocido"?>">Dr. <?php echo $doc['Nombre'] ??"Desconocido"?> <?php echo $doc['Apellido'] ??"Desconocido"?> - <?php echo $doc['Esp'] ??"Desconocido"?></option>
							<?php
								endif;
								endforeach;
							?>
							<?php foreach ($medico_obtension as $doc){ ?>
							<option value="<?php echo $doc['MedicoID'] ??"Desconocido"?>">Dr. <?php echo $doc['Nombre'] ??"Desconocido"?> <?php echo $doc['Apellido'] ??"Desconocido"?> - <?php echo $doc['Esp'] ??"Desconocido"?></option>
							<?php } ?>
						</select>
                        <br>
						
                        <label for="fecha">Fecha:</label>
                        <input type="date" name="fecha" value="<?php echo $cit['Fecha'] ??"Desconocido"?>">
                        <label for="hora">	Hora:</label>
                        <input type="time" name="hora" value="<?php echo $cit['Hora'] ??"Desconocido"?>">
                        <hr>


						<h1>Nota Medica:</h1>
                        <label for="fechan">Fecha:</label>
                        <input type="date" name="fechan" value="<?php echo $cit['Fecha_Nota'] ??"Desconocido"?>">
						<label for="horan">	Hora:</label>
                        <input type="time" name="horan" value="<?php echo $cit['Hora_Nota'] ??"Desconocido"?>">
						
						<br>
						<label for="peso">Peso:</label>
                        <input type="number" name="peso" value="<?php echo $cit['Peso'] ??"Desconocido"?>">
						<label for="talla">	Talla:</label>
                        <input type="number" name="talla" value="<?php echo $cit['Talla'] ??"Desconocido"?>">
						<label for="cc">	Circunferencia de Cintura:</label>
                        <input type="number" name="cc" value="<?php echo $cit['CircuCin'] ??"Desconocido"?>">
						
						<br>
						<label for="inmc">Indice de Masa Corporal:</label>
                        <input type="number" name="inmc" value="<?php echo $cit['InMC'] ??"Desconocido"?>">
						<label for="temp">	Temperatura:</label>
                        <input type="number" name="temp" value="<?php echo $cit['Temp'] ??"Desconocido"?>">

						<br>
						<label for="ta">Tension Arterial:</label>
                        <input type="number" name="ta" value="<?php echo $cit['TenArt'] ??"Desconocido"?>">

						<br>
						<label for="fc">Frecuencia Cardiaca:</label>
                        <input type="number" name="fc" value="<?php echo $cit['FreCar'] ??"Desconocido"?>">
						<label for="fr">	Frecuencia Respiratoria:</label>
                        <input type="number" name="fr" value="<?php echo $cit['FreResp'] ??"Desconocido"?>">
						
						<br>
						<label for="notes">Notas:</label>
						<br>
						<textarea name="notes" id="notes" cols="30" rows="10"><?php echo $cit['Notas'] ??"Desconocido"?></textarea>

						<hr>
						<label for="obs">Observaciones:</label>
						<br>
						<textarea name="obs" id="obs" cols="30" rows="10"><?php echo $cit['Obs'] ??"-"?></textarea>

						<hr>
						<label for="prono">Pronostico:</label>
						<br>
						<textarea name="prono" id="prono" cols="30" rows="10"><?php echo $cit['Prono'] ??"-"?></textarea>
						
                        <hr>

                        <input type="submit" value="Guardar Cambios" name="submit">
                        <hr>
                    </form>
                    

                </div>
            </div>
        </div>
<?php
    endif;
    endforeach;
?>