<?php
    $MedicoID = $_GET['MedicoID'] ?? 1;
    foreach ($medico->getDatos() as $doc):
        if($doc['MedicoID']==$MedicoID):
?>

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
                    <h5>ID de Medico: <?php echo $doc['MedicoID'] ??"Desconosido"?></h5>
                    <h1>Dr. <?php echo $doc['Nombre'] ??"Desconosido"?> <?php echo $doc['Apellido'] ??"Desconosido"?></h1>
                    <h2><?php echo $doc['Esp'] ??"Desconosido"?></h2>
                    <h4><?php echo $doc['Tel_Num'] ??"Desconosido"?></h4>
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
                                <th onclick="sortTable(3)" >Medico</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                                foreach ($cita->getDatos() as $cit):
                                    if($cit['MedicoID']==$MedicoID):
                            ?>
                                <tr onclick="window.location.href='<?php printf('%s?CitasID=%s','Citas-Cita.php', $cit['CitasID']);?>'">
                                    <td id="id" ><?php echo $cit['CitasID'] ??"Desconosido"?></td>
                                    
                                    <?php
                                        $PacienteID = $cit['PacienteID'];
                                        foreach ($paciente->getDatos() as $pac):
                                            if($pac['PacienteID']==$PacienteID):
                                    ?>
                                    <td class="name" ><?php echo $pac['Nombre'] ??"Desconosido"?> <?php echo $pac['Apellido'] ??"Desconocido"?></td>
                                    <?php
                                        endif;
                                        endforeach;
                                    ?>
                                    <td><?php echo $cit['Fecha'] ??"Desconosido"?> <?php echo $cit['Hora'] ??"Desconosido"?></td>

                                    <?php
                                        $MedicoID = $cit['MedicoID'];
                                        foreach ($medico->getDatos() as $doc):
                                            if($doc['MedicoID']==$MedicoID):
                                    ?>
                                    <td>Dr. <?php echo $doc['Nombre'] ??"Desconosido"?> <?php echo $doc['Apellido'] ??"Desconosido"?></td>
                                    <?php
                                        endif;
                                        endforeach;
                                    ?>
                                </tr>
                                <?php
                                        endif;
                                        endforeach;
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

<?php
    endif;
    endforeach;
?>