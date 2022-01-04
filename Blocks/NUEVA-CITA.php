<?php
    $medico_obtension = $medico->getDatos();

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		if (isset($_POST['nueva_cita_submit'])){
			$cita->postDatos($_POST['nombre'], $_POST['apellido'], $_POST['dependencia'], $_POST['doctor'], $_POST['date'], $_POST['time'], $_POST['notes']);
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
							<br>
							<input type="text" name="nombre">
							<br>
							<label for="apellido">Apellido:</label>
							<br>
							<input type="text" name="apellido">
						</div>
						<br>
						<div>
							<label for="dependencia">Dependencia</label>
							<select name="dependencia">
								<option value="Precidencia Municipal1">Precidencia Municipal</option>
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
									<option value="<?php echo $doc['MedicoID'] ??"Desconosido"?>">Dr. <?php echo $doc['Nombre'] ??"Desconosido"?> <?php echo $doc['Apellido'] ??"Desconosido"?> - <?php echo $doc['Esp'] ??"Desconosido"?></option>
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="id" >0</td>
                                <td class="name" >Juan Perez Garza</td>
                                <td>11/17/2021 10:20 A.M.</td>
                            </tr>
                            <tr>
                                <td id="id" >3</td>
                                <td class="name" >Daniel Garcia Ramos</td>
                                <td>11/18/2021 12:45 A.M.</td>
                            </tr>
                        </tbody>
                    </table>
				</div>

			</div>

		</div>