<div class="container">
            <h2>Medicos</h2>   
            <table id="myTable" class="table table-hover">
                <!-- Aqui empieza la tabla la parte que dice on click es solo el java script para orf¿ganizar las listas -->
                <!-- Si vas a poner los titutulos en el php deja el pinche java script o chingas el sort -->
                <thead>
                    <tr>
                        <th onclick="sortTable(0)" >ID</th>
                        <th onclick="sortTable(1)" >Nombre</th>
                        <th onclick="sortTable(2)" >Especialidad</th>
                    </tr>
                </thead>
                <!-- KHRAHMEEEEER -->
                <!-- Aqui empiezan las consultas van en orden ID/NOMBRE/ESPECIALIDAD -->
                <!--  -->
                <tbody>
                    <tr onclick="window.location.href='Doctores-Doctor.html'">
                        <td id="id" >0</td>
                        <td class="name" >Dr. Daniel Duran Perales</td>
                        <td>Cirujano General</td>
                    </tr>
                    <tr onclick="window.location.href='Doctores-Doctor.html'">
                        <td>1</td>
                        <td class="name">Dr. Silvia Guevara Arriata</td>
                        <td>Medico General</td>
                    </tr>
                    <tr onclick="window.location.href='Doctores-Doctor.html'">
                        <td>2</td>
                        <td class="name" >Dr. Oscar Lopez de los Reyes</td>
                        <td>Medico General</td>
                    </tr>
                    <tr onclick="window.location.href='Doctores-Doctor.html'">
                        <td>3</td>
                        <td class="name" >Dr. Hector Garza Leal</td>
                        <td>Cirujano General</td>
                    </tr>
                </tbody>
                <!-- 
                    Este es el formato que debe de ir en la tabla:
                    <tr onclick="window.location.href='"PAGINA DEL DOCTOR".html'">
                        <td>ID DEL DOCTOR</td>
                        <td class="name" >NOMBRE DEL DOCTOR</td>
                        <td>ESPECIALIDAD DEL DOCTOR</td>
                    </tr>
                 -->
            </table>
        </div>