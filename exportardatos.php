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
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/index.css" >
    <link rel="stylesheet" href="js/wow.min.js" >

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
            <a class="nav-link" href="paginaadmin.php"><i class="fas fa-home"></i> Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link"  data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-male"></i> Hombres</a>
            <div class="dropdown-menu "style="background-color:#ECF7F6;">
              <a class="dropdown-item" href="registrar_hombres.php"><i class="fas fa-plus-circle"></i>  Agregar hombres</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link"  data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-female"></i> Mujeres</a>
            <div class="dropdown-menu "style="background-color:#ECF7F6;">
              <a class="dropdown-item" href="registrohombres.php"><i class="fas fa-plus-circle"></i> Agregar mujeres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="exportardatos.php"><i class="fas fa-file-export"></i> Exportar datos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="salir.php"><i class="fas fa-power-off"></i> Cerrar sesion</a>
          </li>
</nav>


<div class="container">
    <div class="row" style="text-align:center; padding-top:150px;">
        <div class="col">
            <img  href="exportardatoshombres.php" class="logo2 wow slow delay-2s bounceInRight" src="assets/imagenes/femenino.png" width="150" alt="">
            <br><br>
            <a type="button" class="btn btn-info" href="exportardatosmujeres.php">Exportar mujeres</a>
        </div>
        <div class="col">
            <img class="logo2 wow slow delay-2s bounceInRight" src="assets/imagenes/masculino.png" width="150" alt="">
            <br><br>
            <a type="button" class="btn btn-info" href="exportardatoshombres.php"> Exportar hombres </a>
        </div>
    </div>
</div>
    


</body>
</html>