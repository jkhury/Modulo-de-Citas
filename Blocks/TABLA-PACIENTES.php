<?php
    $paciente_obtension = $paciente->getDatos();
?>


 <div class="container">
            <h2>Pacientes</h2>
            <table id="myTable" class="table table-hover">
                <thead>
                    <tr>
                        <th onclick="sortTable(0)" >ID</th>
                        <th onclick="sortTable(1)" >Nombre</th>
                        <th onclick="sortTable(2)" >Dependecia</th>
                    </tr>
                </thead>
              
            
                <tbody>
                <?php foreach ($paciente_obtension as $pac){ ?>
                    <tr onclick="window.location.href='<?php printf('%s?PacienteID=%s','Pacientes-Patient.php', $pac['PacienteID']);?>'">
                        <td id="id" ><?php echo $pac['PacienteID'] ??"Desconocido"?></td>
                        <td class="name" ><?php echo $pac['Nombre'] ??"Desconocido"?> <?php echo $pac['Apellido'] ??"Desconocido"?></td>
                        <td><?php echo $pac['Dependencia'] ??"Desconocido"?> </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
       
            
        </div>