<?php
include("conexion.php");

$query="SELECT * FROM hombres";
$resultado=$conexion->query($query);

?>

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
                <a class="nav-link" href="mostrarhombres.php"><i class="fas fa-search"></i> Consulta hombres</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="mostrarmujeres.php"><i class="fas fa-search"></i> Consulta mujeres</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="login.php"><i class="fas fa-user-tie"></i> Inicia Sesion</a>
                </li>
        </div>
    </nav>
    </header>


<center>
    <div class="container">
    <table class="table table-striped" style="text-align:center;">
        <thead>
            <br>
            <tr>
                <h4 style="padding-top:10px; font-family: 'Quicksand', sans-serif;" >Lista de registros de hombres</h4>
            </tr>
            <br>
        </thead>
        <form method="POST">
            <input type="text" name="idregistrohombres" placeholder="Ingrese codigo a buscar">
            <input type="submit" name="buscar" value="Buscar">
         </form>
        <tbody>
            <tr>
                <td style="font-family: 'Quicksand', sans-serif;" class="table-info"><strong>IDRegistro</strong></td>
                <td style="font-family: 'Quicksand', sans-serif;" class="table-info"><strong>Municipio</strong></td>
                <td style="font-family: 'Quicksand', sans-serif;" class="table-info"><strong>Mes</strong></td>
                <td style="font-family: 'Quicksand', sans-serif;" class="table-info"><strong>Año</strong></td>
                <td style="font-family: 'Quicksand', sans-serif;" class="table-info"><strong>Cantidad</strong></td>
                <td style="font-family: 'Quicksand', sans-serif;" class="table-info"><strong>Opciones</strong></td>
            </tr>
            <?php
            
            while($row=$resultado->fetch_assoc()){
            ?>
            <tr>
                <td style="background-color:white;"><?php echo $row['idregistrohombres'];?></td>
                <td style="background-color:white;"><?php echo $row['municipio'];?></td>
                <td style="background-color:white;"><?php echo $row['mes'];?></td>
                <td style="background-color:white;"><?php echo $row['anno'];?></td>
                <td style="background-color:white;"><?php echo $row['numero_hombres'];?></td>
                <td style="background-color:white;"> <a type="button" class="btn btn-primary" href="vermashombres.php?idregistrohombres=<?php echo $row['idregistrohombres'];?>"> Ver registro </a> </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    </div>
</center>




</body>
</html>