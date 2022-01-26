<?php
    $PacienteID = $_GET['PacienteID'];
    foreach ($paciente->getDatos() as $pac):
        if($pac['PacienteID']==$PacienteID):

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['submit'])){
            $target_dir = "Docs/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } 

            $paciente->newDatos($_POST['nombre'], $_POST['apellido'], $_POST['numt'], $_POST['dependencia'], $target_file, $_POST['id']);

        }
    }
?>
        <div class="container">
            <div class="row content">
                <div class="col-sm-3 sidenav">
                    <br>
                    <img src="Img/patient.png" alt="patient icon" width="50%" height="10%">
                    
                    <h1><a href="<?php printf('%s?PacienteID=%s','Pacientes-Patient.php', $pac['PacienteID']);?>">Paciente</a></h1>

                    <?php
                        foreach ($cita->getDatos() as $cit):
                            if($cit['PacienteID']==$PacienteID):
                    ?>

                    <ul class="nav nav-pills nav-stacked">
                        <li class=""><a href="<?php printf('%s?CitasID=%s','Citas-Cita.php', $cit['CitasID']);?>"><?php echo $cit['Fecha'] ??"Desconocido"?> <?php echo $cit['Hora'] ??"Desconocido"?></a></li>
                    </ul>
                    <br>
    
                    <?php
                        endif;
                        endforeach;
                    ?>
                </div>
                
                <div class="col-sm-9 form">
                    <form method="post" enctype="multipart/form-data">
                        <h3>ID: <?php echo $pac['PacienteID'] ??"Desconocido"?></h3>
                        <input type="hidden" name="id" value="<?php echo $pac['PacienteID'] ??"Desconocido"?>">
                        <label for="nombre">Nombre</label>
                        <br>
                        <input type="text" name="nombre" value="<?php echo $pac['Nombre'] ??"Desconocido"?>">
                        <br>
                        <label for="apellido">Apellido</label>
                        <br>
                        <input type="text" name="apellido" value="<?php echo $pac['Apellido'] ??"Desconocido"?>">
                        <br>
                        <label for="numt">Num. Telefono</label>
                        <br>
                        <input type="text" name="numt">
                        <hr>
                        <label for="dependencia">Dependencia</label>
                        <br>
                        <select name="dependencia">
                            <option value="<?php echo $pac['Dependencia'] ??"Desconocido"?>"><?php echo $pac['Dependencia'] ??"Desconocido"?></option>
							<option value="Precidencia Municipal">Precidencia Municipal</option>
							<option value="Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado">Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado</option>
							<option value="Instituto Mexicano del Seguro Social">Instituto Mexicano del Seguro Social</option>
						</select>
                        <hr>
                        <label>Expeediente</label>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="hidden" name="direccion" value="<?php echo "$target_file"?>">
<<<<<<< HEAD

                        <hr></hr>
                        <input type="submit" value="Guardar Cambios" name="submit" class="btn btn-success" >
=======
                        <input type="submit" value="Guardar Cambios" name="submit">
>>>>>>> 63d4c50e001a59982f46945199fe0566344f8eb7
                        <hr>
                    </form>
                    

                </div>
            </div>
        </div>
<?php
    endif;
    endforeach;
?>