        <div class="container">
            <h2>Medicos</h2>   
            <table id="myTable" class="table table-hover">
                <thead>
                    <tr>
                        <th onclick="sortTable(0)" >ID</th>
                        <th onclick="sortTable(1)" >Nombre</th>
                        <th onclick="sortTable(2)" >Dependecia</th>
                    </tr>
                </thead>
                <!--
                    Aqui deben de empezar las consultas
                    el orden de la tabla es ID/NOMBRE/DEPENDENCIA
                    El onclick los debe de llevar a la cita del paciente en su perfil
                    de paciente
                -->
                <tbody>
                    <tr onclick="window.location.href='Pacientes-Patient.php'">
                        <td id="id" >0</td>
                        <td class="name" >Juan Perez Garza</td>
                        <td>Presidencia Municipal</td>
                    </tr>
                    <tr onclick="window.location.href='Pacientes-Patient.php'">
                        <td>1</td>
                        <td class="name">Jose Estrada Mancilla</td>
                        <td>ISTE</td>
                    </tr>
                    <tr onclick="window.location.href='Pacientes-Patient.php'">
                        <td>2</td>
                        <td class="name" >Alejandro Torres Zuñiga</td>
                        <td>IMSS</td>
                    </tr>
                    <tr onclick="window.location.href='Pacientes-Patient.php'">
                        <td id="id" >3</td>
                        <td class="name" >Daniel Garcia Ramos</td>
                        <td>ISTE</td>
                    </tr>
                </tbody>
            </table>
            <!--Aqui acaba la tabla cochetumadre-->
        </div>