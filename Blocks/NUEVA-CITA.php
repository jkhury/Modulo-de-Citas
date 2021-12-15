<div class="container">
			<br>
			<div class="row content">
				<div class="col-sm-6 form">
					<!--Aqui epieza el formulario de Nueva Cita-->
					<form action="">
						<div>
							<label for="name">Paciente:</label>
							<input type="text" name="name">
						</div>
						<br>
						<div>
							<label for="dep">Dependencia</label>
							<select name="dependencia" id="dep">
								<option value="1">Precidencia Municipal</option>
								<option value="2">Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado</option>
								<option value="3">Instituto Mexicano del Seguro Social</option>
							</select>
						</div>
						<br>
						<div>
							<label for="doctor">Medico:</label>
							<select id="doctor" name="doctor">
								<optgroup label="Medico General">
									<option>Dr. Daniel Duran Perales</option>
								</optgroup>	
								<optgroup label="Cirujano">
									<option>Dr. Christian Gray</option>
								</optgroup>
								<optgroup label="Patologia">
									<option>Dr. Gregory House</option>
								</optgroup>
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
							<textarea name="notes" id="notes" cols="30" rows="10"></textarea>
						</div>
						<button>Citar</button>
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