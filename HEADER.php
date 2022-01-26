<!DOCTYPE html>

<html>
    <head>
        <title>Sistema de Citas</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
       
        
        <script src="Script/CitasJS.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php
            //Conectrar a Base de Datos
            require ('ControladorBD.php');
        ?>
    </head>

    <body>
        <header id="head">
            <nav class="navbar navbar-expand-sm bg-info navbar-dark">
                <div class="container-fluid">
                  

                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-tabs" ><a href="Home.php">Inicio</a></li>
                            <li class="nav-tabs"><a href="Citas.php">Citas</a></li>
                            <li class="nav-tabs"><a href="Doctores.php">Medicos</a></li>
                            <li class="nav-tabs"><a href="Pacientes.php">Pacientes</a></li>
                            <li class="nav-tabs"><a href="Administrador.php">Admin</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main id="body">
        </body> 
  
</html>   