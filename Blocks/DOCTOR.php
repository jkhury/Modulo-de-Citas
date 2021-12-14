        <div class="container">
            <div class="row content">
                <div class="col-sm-3 sidenav">
                    <br>
                    <img src="./Img/Medic Icon.png" alt="patient icon" width="50%" height="10%">
                    
                    <h1>Medico</h1>

                    <ul class="nav nav-pills nav-stacked">
                        <li></li>
                    </ul><br>
                </div>
                
                <div class="col-sm-9 form">
                    <!--
                        Aqui empieza la informacion del doctor
                    -->
                    <h5>ID de Medico: 0</h5>
                    <h1>Dr. Daniel Duran Perales</h1>
                    <h2>Cirujano General</h2>
                    <h4>(834)265-9545</h4>
                    <!--
                        Aqui acaba pero sigue meterle la tabla de sus citas pendientes
                        es casi igual que la tabla de citas pero con filtro que solo muestre
                        las citas de este doctor
                    -->
                    <hr>
                    <h4>Citas:</h4>
                    <table id="myTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th onclick="sortTable(0)" >Folio</th>
                                <th onclick="sortTable(1)" >Nombre</th>
                                <th onclick="sortTable(2)" >Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr onclick="window.location.href='Citas-Cita.php'">
                                <td id="id" >0</td>
                                <td class="name" >Juan Perez Garza</td>
                                <td>11/17/2021 10:20 A.M.</td>
                            </tr>
                            <tr onclick="window.location.href='Citas-Cita.php'">
                                <td id="id" >3</td>
                                <td class="name" >Daniel Garcia Ramos</td>
                                <td>11/18/2021 12:45 A.M.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>