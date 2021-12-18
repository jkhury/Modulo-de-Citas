<?php
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
                    echo "$target_file";
                    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

            $paciente->newDatos()

        }
    }
?>
                <div class="col-sm-9 form">
                    <form method="post" enctype="multipart/form-data">
                        <h3>ID: 1</h3>
                        <label for="nombre">Nombre</label>
                        <br>
                        <input type="text" name="nombre">
                        <br>
                        <label for="apellido">Apellido</label>
                        <br>
                        <input type="text" name="apellido">
                        <br>
                        <label for="numt">Num. Telefono</label>
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
                        <label>Expeediente</label>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="hidden" name="direccion" value="<?php echo $target_file?>">
                        <input type="submit" value="Upload Image" name="submit">
                        <hr>
                    </form>
                    

                </div>
            </div>
        </div>
