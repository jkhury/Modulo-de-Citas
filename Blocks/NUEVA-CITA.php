<?php
	$citas_obtension = $cita->getDatos();
    $medico_obtension = $medico->getDatos();

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		if (isset($_POST['nueva_cita_submit'])){
			$cita->postDatos($_POST['nombre'], $_POST['apellido'], $_POST['sexo'], $_POST['dob'], $_POST['curp'], $_POST['dependencia'], $_POST['doctor'], $_POST['date'], $_POST['time'], $_POST['notes']);
		}
	}
?>

		<div class="container">
			<br>
			<div class="row content">
				<div class="col-sm-6 form">
					<!--Aqui epieza el formulario de Nueva Cita-->
					<form method="post">
						<div>
							<h3>Paciente</h3>
							<label for="nombre">Nombre:</label>
							<input type="text" name="nombre">
							<label for="apellido">Apellidos:</label>
							<input type="text" name="apellido">
							<br>

							<label for="sexo">Sexo:</label>
							<select name="sexo">
								<option value="Maculino">Maculino</option>
								<option value="Femenino">Femenino</option>
							</select>
							<br>

							<label for="dob">Fecha de Nacimiento:</label>
							<input type="date" name="dob">
							<label for="curp">	CURP:</label>
							<input type="text" name="curp">
							
						</div>

						<br>
						<div>
							<label for="dependencia">Dependencia</label>
							<select name="dependencia">
								<option value="Desconocida">Desconocida</option>
								<option value="Precidencia Municipal">Precidencia Municipal</option>
								<option value="Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado">Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado</option>
								<option value="Instituto Mexicano del Seguro Social">Instituto Mexicano del Seguro Social</option>
							</select>
						</div>
						<br>
						<h3>Cita</h3>
						<div>
							<label for="doctor">Medico:</label>
							<select name="doctor">
								<?php foreach ($medico_obtension as $doc){ ?>
									<option value="<?php echo $doc['MedicoID'] ??"Desconocido"?>">Dr. <?php echo $doc['Nombre'] ??"Desconocido"?> <?php echo $doc['Apellido'] ??"Desconocido"?> - <?php echo $doc['Esp'] ??"Desconocido"?></option>
								<?php } ?>
							</select>
						</div>
						<br>
						<div>
							<div>
								<label for="date">Fecha:</label>
								<input type="date" name="date" id="date">
								<label for="time">Hora:</label>
								<input type="time" name="time" id="time">
							</div>
						</div>
						<br>
						<div>
							<label for="notes">Notas:</label>
							<br>
							<textarea name="notes" id="notes" cols="30" rows="10"></textarea>
						</div>
						<button name ="nueva_cita_submit">Citar</button>
					</form>
					<!--Aqui termina el formulario de Nueva Cita-->
				</div>

				<div class="col-sm-4">
                    <table id="myTable" class="table table-hover">
					<thead>
                        <tr>
                            <th onclick="sortTable(0)" >Folio</th>
                            <th onclick="sortTable(1)" >Nombre</th>
                            <th onclick="sortTable(2)" >Fecha</th>
                            <th onclick="sortTable(3)" >Medico</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($citas_obtension as $cit){ ?>
                            <tr onclick="window.location.href='<?php printf('%s?CitasID=%s','Citas-Cita.php', $cit['CitasID']);?>'">
                                <td id="id" ><?php echo $cit['CitasID'] ??"Desconocido"?></td>
                                
                                <?php
                                    $PacienteID = $cit['PacienteID'];
                                    foreach ($paciente->getDatos() as $pac):
                                        if($pac['PacienteID']==$PacienteID):
                                ?>
                                <td class="name" ><?php echo $pac['Nombre'] ??"Desconocido"?> <?php echo $pac['Apellido'] ??"Desconocido"?></td>
                                <?php
                                    endif;
                                    endforeach;
                                ?>
                                <td><?php echo $cit['Fecha'] ??"Desconocido"?> <?php echo $cit['Hora'] ??"Desconocido"?></td>

                                <?php
                                    $MedicoID = $cit['MedicoID'];
                                    foreach ($medico->getDatos() as $doc):
                                        if($doc['MedicoID']==$MedicoID):
                                ?>
                                <td>Dr. <?php echo $doc['Nombre'] ??"Desconocido"?> <?php echo $doc['Apellido'] ??"Desconocido"?></td>
                                <?php
                                    endif;
                                    endforeach;
                                ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                    </table>
				</div>

			</div>
		</div>