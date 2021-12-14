        <div class="container">
            <div class="form">
                <h2>Citas Medicas</h2>
                <button type="button" onclick="window.location.href='Citas-NuevaCitas.html'">Nueva Cita</button>
            </div>
            <!--
                HEYYYY!!!!
                Pinche putito aqui empieza la TABLA
                No le muevas al pinche onclick
            -->
            <table id="myTable" class="table table-hover">
                <thead>
                    <tr>
                        <th onclick="sortTable(0)" >Folio</th>
                        <th onclick="sortTable(1)" >Nombre</th>
                        <th onclick="sortTable(2)" >Fecha</th>
                        <th onclick="sortTable(3)" >Medico</th>
                    </tr>
                </thead>
                <!--
                    Aqui deben de empezar las consultas
                    el orden de la tabla es ID/NOMBRE/FECHA & HORA/MEDICO
                    El onclick los debe de llevar a la cita del paciente en su perfil
                    de paciente
                -->
                <tbody>
                    <tr onclick="window.location.href='Citas-Cita.php'">
                        <td id="id" >0</td>
                        <td class="name" >Juan Perez Garza</td>
                        <td>11/17/2021 10:20 A.M.</td>
                        <td>Dr. Daniel Duran Perales</td>
                    </tr>
                    <tr onclick="window.location.href='Citas-Cita.html'">
                        <td>1</td>
                        <td class="name">Jose Estrada Mancilla</td>
                        <td>11/16/2021 12:30 A.M.</td>
                        <td>Dr. Oscar Lopez de los Reyes</td>
                    </tr>
                    <tr onclick="window.location.href='Citas-Cita.html'">
                        <td>2</td>
                        <td class="name" >Alejandro Torres Zuñiga</td>
                        <td>11/10/2021 2:40 P.M.</td>
                        <td>Dr. Hector Garza Leal</td>
                    </tr>
                    <tr onclick="window.location.href='Citas-Cita.html'">
                        <td id="id" >3</td>
                        <td class="name" >Daniel Garcia Ramos</td>
                        <td>11/18/2021 12:45 A.M.</td>
                        <td>Dr. Daniel Duran Perales</td>
                    </tr>
                </tbody>
            </table>
            <!--Aqui acaba la tabla cochetumadre-->
        </div>