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
					<input type="number" name="numt">
					<br>
					<label for="type">Tipo de Usuario</label>
					<br>
					<select name="type" id="type">
						<option value="1">Admin</option>
						<option value="2">Secre</option>
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
						<option value="1">Especialidad 1</option>
						<option value="2">Especialidad 2</option>
						<option value="3">Especialidad 3</option>
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