<?php
    $medico_obtension = $medico->getDatos();
?>

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
                <?php foreach ($medico_obtension as $doc){ ?>
                    <tr onclick="window.location.href='<?php printf('%s?MedicoID=%s','Doctores-Doctor.php', $doc['MedicoID']);?>'">
                        <td id="id" ><?php echo $doc['MedicoID'] ??"Desconosido"?></td>
                        <td class="name" ><?php echo $doc['Nombre'] ??"Desconosido"?> <?php echo $doc['Apellido'] ??"Desconosido"?></td>
                        <td><?php echo $doc['Esp'] ??"Desconosido"?></td>
                    </tr>
                    <?php } ?>
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
        <br>.
        <hr>