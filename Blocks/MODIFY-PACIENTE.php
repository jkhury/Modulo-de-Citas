                <div class="col-sm-9 form">
                    <h3>ID: 1</h3>
                    <label for="name">Nombre</label>
                    <br>
                    <input type="text" name="name">
                    <br>
                    <label for="phone">Num. Telefono</label>
                    <br>
                    <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                    <hr>
                    <label for="dep">Dependencia</label>
                    <br>
                    <select name="dep" id="1">
                        <option value="1">Dependencia 1</option>
						<option value="2">Dependencia 2</option>
						<option value="3">Dependencia 3</option>
                    </select>
                    <hr>
                    <label for="exp">Expediente</label>
                    <input type="file" name="exp">
                    <hr>
                    <button onclick="window.location.href='Pacientes-Patient.html'">Confirmar Cambios</button>
                    <hr>

                </div>
            </div>
        </div>