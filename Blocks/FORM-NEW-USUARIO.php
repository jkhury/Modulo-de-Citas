<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		if (isset($_POST['nuevo_medico_submit'])){
			$medico->postDatos($_POST['nombre'], $_POST['apellido'], $_POST['esp'], $_POST['numt']);
		}
	}
?>
		<div class="container form">
			<form method="post">
				<div>
					<br>
					<label for="nombre">Nombre del Usuario</label>
					<br>
					<input type="text" name="nombre">
					<br>
					<label for="apellido">Apellidos del Usuario</label>
					<br>
					<input type="text" name="apellido">
					<br>
					<label for="numt">Numero de Telefono</label>
					<br>
					<input type="tel" name="numt" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
					<br>
					<label for="type">Tipo de Usuario</label>
					<br>
					<select name="type" id="type">
						<option value="1">Administrador</option>
						<option value="2">Secretario</option>
						<option value="3">Medico</option>
					</select>
				</div>
				<hr>
				<div>
					<label for="especialidad">Especialidad:</label>
					<br>
					<!--
						Este pinche select debe de mostrarse solo si es seleccionado el tipo de usuario
						de medico voy a hacer tantita magia de en javascript para hacer que eso pase
						tu solo encargate de que aqui muestre las especialidades en la base de datos
					-->
					<select name="esp" id="esp">
						<option value="Medicina Familiar">Medicina Familiar</option>
						<option value="Médicina Interna">Médicina Interna</option>
						<option value="Pediatría">Pediatría</option>
						<option value="Gineco obstetricia">Gineco obstetricia</option>
						<option value="Cirugía">Cirugía</option>
						<option value="Psiquiatría">Psiquiatría</option>
						<option value="Cardiología">Cardiología</option>
						<option value="Dermatología">Dermatología</option>
						<option value="Endocrinología">Endocrinología</option>
						<option value="Gastroenterología">Gastroenterología</option>
						<option value="Infectología">Infectología</option>
						<option value="Nefrología">Nefrología</option>
						<option value="Oftalmología">Oftalmología</option>
						<option value="Otorrinolaringología">Otorrinolaringología</option>
						<option value="Neumología">Neumología</option>
						<option value="Neurología">Neurología</option>
						<option value="Radiología">Radiología</option>
						<option value="Anestesiología">Anestesiología</option>
						<option value="Oncología">Oncología</option>
						<option value="Patología">Patología</option>
						<option value="Urología">Urología</option>
						<option value="Medicina física y rehabilitación">Medicina física y rehabilitación</option>
						<option value="Medicina Intensiva">Medicina Intensiva</option>
					</select>
				</div>
				<hr>
				<div>
					<label for="username">Username:</label>
					<br>
					<input type="text" name="username" id="username">
					<br>
					<label for="password">Contraseña:</label>
					<br>
					<input type="password" name="password" id="password">
				</div>
				<br>
				<button type="submit" name ="nuevo_medico_submit" >Agregar Usuario</button>
			</form>
		</div>