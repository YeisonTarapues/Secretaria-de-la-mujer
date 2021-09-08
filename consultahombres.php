<?php include("conexion.php") ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/estilos.css">


    <link rel="stylesheet" href="css/animate.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="js/wow.min.js" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        new WOW().init();
        </script>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-light" style="background-color:#9DDF9A">
        <div class="container">
            <a href="" class="navbar-brand">
                <img class="logo1" src="assets/imagenes/LOGO.png" width="260" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar7">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="documentos.php"><i class="fas fa-folder-open"></i> Documentos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="consultahombres.php"><i class="fas fa-search"></i> Consulta hombres</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="consultamujeres.php"><i class="fas fa-search"></i> Consulta mujeres</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="ayuda.php"><i class="fas fa-question-circle"></i> Ayuda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="login.php"><i class="fas fa-user-tie"></i> Inicia Sesion</a>
                </li>
        </div>
    </nav>
    </header>
        <br><br>

    <div class="container">
        <div class="card">
            <br>
            <h2 style="text-align:center;">Buscar registro de hombres</h2>
            <br><br>
            <div class="card-body">
            <form style="padding-left:200px; padding-right:200px;" action ="buscarhombres.php" method="POST" style="text-align:center;">
                <input  class="form-control" type="text" name="id" placeholder="Ingrese el ID del registro Año/Mes/Numero del municipio" title="01-Monteria, 02-Ayapel, 03-Buenavista, 04-Canalete, 05-Cerete, 06-Chima, 07-Chinu, 08-Cienaga de Oro, 09-Cotorra, 10-La Apartada, 11-Los Cordoba, 12-Montelibano, 13-Momil, 14-Moñitos, 15-Planeta Rica, 16-Pueblo Nuevo, 17-Puerto Escondido, 18-Puerto Libertador, 19-Purisima de la Concepcion, 20-Sahagun, 21-San Andres de Sotavento, 22-San Antero, 23-San Bernardo del Viento, 24-San Carlos, 25-San Jose de Ure, 26-San Pelayo, 27-Lorica, 28-Tierralta, 29-Tuchin, 30-Valencia">
                <br>
                <center><input class="btn btn-success" type="submit" name="buscar" value="Buscar"><center>
            </form>
            <br>
            </div>
            <div class="container" style="padding-left:200px; padding-right:200px;" >
            <div class="row">
                <div class="col">
                <div class="alert alert-warning" role="alert">
                    <center><strong>Recuerda!</strong></center>
                    <center>Para buscar un registro debes usar el ID.</center>
                    <center>el ID esta compuesto asi: Año/Mes/Numero del municipio</center>
                    <center>este ID significa el año, el mes de registro y el municipio del registro</center>
                    <center>por ejemplo: <strong>20191101</strong></center>
                </div>
                </div>
                <div class="col">
                <div class="alert alert-primary" role="alert">
                    <center><strong>¡No lo olvides!</strong></center>
                    <center>Para saber el numero del municipio</center>
                    <center>solo debes poner el cursor encima del buscador</center>
                </div>
                </div>
            </div>
            </div>
    </div>




</body>
</html>