<?php
    $citas_obtension = $cita->getDatos();

?>     
            <div class="col-sm-4">
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
                        <?php foreach ($citas_obtension as $cit){ ?>
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
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>