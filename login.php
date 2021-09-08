<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login con sesion</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/js/wow.min.js" rel="stylesheet">

    <!--Scripts-->
    <script src="assets/js/wow.min.js"></script>
    <script src="aseets/js/jquery.js"></script>
    <script src="aseets/js/bootstrap.min.js"></script>
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
                <a class="nav-link" href="login.php"><i class="fas fa-user-tie"></i> Inicia Sesion</a>
                </li>
        </div>
    </nav>
    </header>

    <br><br><br>
    <center>
    <form action="loguear.php" method="POST" style="padding-left:350px; padding-right:350px;">
        <center><img class="logo1" src="assets/imagenes/LOGO.png" width="350" alt=""></center>
        <br><br>
          <label for="exampleFormControlInput1"><i class="fas fa-users"></i> Usuario</label>
            <input name="usuario" type="text" class="form-control"  placeholder="Ej: Juanito.Lopez">
          <br>
          <label for="exampleFormControlInput1"><i class="fas fa-key"></i> Contraseña </label>
            <input name="clave" type="password" class="form-control" placeholder="Contraseña">
          <br>
          <center><button type="submit" class="btn btn-primary">Iniciar sesion</button></center>
          <br>
    </form>
    </center>

    

</body>
</html>