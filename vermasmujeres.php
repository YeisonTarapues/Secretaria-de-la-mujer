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
<br>
<form action="registrarmujeres.php" method="POST">

    <?php

    $idregistromujeres = $_REQUEST['idregistromujeres'];

    include "conexion.php";


        $query="SELECT * FROM mujeres WHERE idregistromujeres = '$idregistromujeres'";
        $resultado=$conexion->query($query);
        $row=$resultado->fetch_assoc();
    ?>
</form>

<div class="container">
  <center><h2 style="font-family: 'Quicksand', sans-serif;">Informacion detallada</h2></center>
  <table class="table" style="text-align:center;">
    <thead>
      <tr class="table-primary">
        <th>IDRegistro</th>
        <th>Municipio</th>
        <th>Mes</th>
        <th>Año</th>
        <th>Cantidad de mujeres</th>
      </tr>
    </thead>
    <tbody>   
      <tr class="table-light">
        <td><?php echo $row['idregistromujeres'];?></td>
        <td><?php echo $row['municipio']; ?></td>
        <td><?php echo $row['mes']; ?></td>
        <td><?php echo $row['anno']; ?></td>
        <td><?php echo $row['numero_mujeres']; ?></td>
      </tr>
    </tbody>
  </table>
</div>
<br><br>
<div class="container">
  <center><h3 style="font-family: 'Quicksand', sans-serif;">Rangos de edades</h3></center>
  <table class="table" style="text-align:center; font-size:70%;">
    <thead>
      <tr class="table-primary">
        <th>entre 0 a 4</th>
        <th>entre 5 a 9</th>
        <th>entre 10 a 14</th>
        <th>entre 15 a 19</th>
        <th>entre 20 a 24</th>
        <th>entre 25 a 29</th>
        <th>entre 30 a 34</th>
        <th>entre 35 a 39</th>
        <th>entre 40 a 44</th>
        <th>entre 45 a 49</th>
        <th>entre 55 a 59</th>
        <th>mayor de 60</th>
      </tr>
    </thead>
    <tbody>   
      <tr class="table-light">
        <td><?php echo $row['edad_entre_0_a_4'];?></td>
        <td><?php echo $row['edad_entre_5_a_9']; ?></td>
        <td><?php echo $row['edad_entre_10_a_14']; ?></td>
        <td><?php echo $row['edad_entre_15_a_19']; ?></td>
        <td><?php echo $row['edad_entre_20_a_24']; ?></td>
        <td><?php echo $row['edad_entre_25_a_29'];?></td>
        <td><?php echo $row['edad_entre_30_a_34']; ?></td>
        <td><?php echo $row['edad_entre_35_a_39']; ?></td>
        <td><?php echo $row['edad_entre_40_a_44']; ?></td>
        <td><?php echo $row['edad_entre_45_a_49']; ?></td>
        <td><?php echo $row['edad_entre_55_a_59'];?></td>
        <td><?php echo $row['edad_mayor_de_60']; ?></td>
      </tr>
    </tbody>
  </table>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col">
            <center><h3 style="font-family: 'Quicksand', sans-serif;">Etnia</h3></center>
            <table class="table" style="text-align:center; font-size:70%;">
                <thead>
                <tr class="table-primary">
                    <th>indigena</th>
                    <th>afrocolombiano</th>
                    <th>gitano</th>
                    <th>palenquero</th>
                    <th>otra etnia</th>
                </tr>
                </thead>
                <tbody>   
                <tr class="table-light">
                    <td><?php echo $row['indigena'];?></td>
                    <td><?php echo $row['afrocolombiano']; ?></td>
                    <td><?php echo $row['gitano']; ?></td>
                    <td><?php echo $row['palenquero']; ?></td>
                    <td><?php echo $row['otra_etnia']; ?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col">
                    <center><h3 style="font-family: 'Quicksand', sans-serif;">Tipo de regimen</h3></center>
            <table class="table" style="text-align:center; font-size:70%;">
                <thead>
                <tr class="table-primary">
                    <th>contributivo</th>
                    <th>especial</th>
                    <th>no_asegurado</th>
                    <th>excepcion</th>
                    <th>subsidiado</th>
                </tr>
                </thead>
                <tbody>   
                <tr class="table-light">
                    <td><?php echo $row['contributivo'];?></td>
                    <td><?php echo $row['especial']; ?></td>
                    <td><?php echo $row['no_asegurado']; ?></td>
                    <td><?php echo $row['excepcion']; ?></td>
                    <td><?php echo $row['subsidiado']; ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col">
        <center><h3 style="font-family: 'Quicksand', sans-serif;">Area</h3></center>
            <table class="table" style="text-align:center; font-size:70%;">
                <thead>
                <tr class="table-primary">
                    <th>cabecera_municipal</th>
                    <th>centro_poblado</th>
                    <th>rural_disperso</th>
                </tr>
                </thead>
                <tbody>   
                <tr class="table-light">
                    <td><?php echo $row['cabecera_municipal'];?></td>
                    <td><?php echo $row['centro_poblado']; ?></td>
                    <td><?php echo $row['rural_disperso']; ?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col">
        <center><h3 style="font-family: 'Quicksand', sans-serif;">Estado civil</h3></center>
            <table class="table" style="text-align:center; font-size:70%;">
                <thead>
                <tr class="table-primary">
                    <th>soltero</th>
                    <th>viudo</th>
                    <th>casado</th>
                    <th>divorciado</th>
                </tr>
                </thead>
                <tbody>   
                <tr class="table-light">
                    <td><?php echo $row['soltero'];?></td>
                    <td><?php echo $row['viudo']; ?></td>
                    <td><?php echo $row['casado']; ?></td>
                    <td><?php echo $row['divorciado']; ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col">
        <center><h3 style="font-family: 'Quicksand', sans-serif;">Estrato</h3></center>
            <table class="table" style="text-align:center; font-size:70%;">
                <thead>
                <tr class="table-primary">
                    <th>uno</th>
                    <th>dos</th>
                    <th>tres</th>
                    <th>cuatro</th>
                    <th>cinco</th>
                    <th>seis</th>
                </tr>
                </thead>
                <tbody>   
                <tr class="table-light">
                    <td><?php echo $row['uno'];?></td>
                    <td><?php echo $row['dos']; ?></td>
                    <td><?php echo $row['tres']; ?></td>
                    <td><?php echo $row['cuatro']; ?></td>
                    <td><?php echo $row['cinco']; ?></td>
                    <td><?php echo $row['seis']; ?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col">
        <center><h3 style="font-family: 'Quicksand', sans-serif;">Nivel de educacion</h3></center>
            <table class="table" style="text-align:center; font-size:70%;">
                <thead>
                <tr class="table-primary">
                    <th>educacion_basica</th>
                    <th>educacion_media</th>
                    <th>educacion_superior</th>
                    <th>otro_nivel_educativo</th>
                </tr>
                </thead>
                <tbody>   
                <tr class="table-light">
                    <td><?php echo $row['educacion_basica'];?></td>
                    <td><?php echo $row['educacion_media']; ?></td>
                    <td><?php echo $row['educacion_superior']; ?></td>
                    <td><?php echo $row['otro_nivel_educativo']; ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col">
        <div class="container">
        <center><h3 style="font-family: 'Quicksand', sans-serif;">Parentesco con la victima</h3></center>
        <table class="table" style="text-align:center; font-size:70%;">
            <thead>
            <tr class="table-primary">
                <th>madre</th>
                <th>pareja</th>
                <th>expareja</th>
                <th>familiar</th>
                <th>padre</th>
                <th>ningun_parentesco</th>
            </tr>
            </thead>
            <tbody>   
            <tr class="table-light">
                <td><?php echo $row['madre'];?></td>
                <td><?php echo $row['pareja']; ?></td>
                <td><?php echo $row['expareja']; ?></td>
                <td><?php echo $row['familiar']; ?></td>
                <td><?php echo $row['padre']; ?></td>
                <td><?php echo $row['ningun_parentesco'];?></td>
            </tr>
            </tbody>
        </table>
</div>
        </div>
        <div class="col">
        <div class="container">
                <center><h3 style="font-family: 'Quicksand', sans-serif;">Ambito de la violencia</h3></center>
                <table class="table" style="text-align:center; font-size:70%;">
                    <thead>
                    <tr class="table-primary">
                        <th>institucional</th>
                        <th>escolar</th>
                        <th>hogar</th>
                        <th>comunitario</th>
                        <th>manera_virtual</th>
                        <th>laboral</th>
                        <th>otro_ambito</th>
                    </tr>
                    </thead>
                    <tbody>   
                    <tr class="table-light">
                        <td><?php echo $row['institucional'];?></td>
                        <td><?php echo $row['escolar']; ?></td>
                        <td><?php echo $row['hogar']; ?></td>
                        <td><?php echo $row['comunitario']; ?></td>
                        <td><?php echo $row['manera_virtual']; ?></td>
                        <td><?php echo $row['laboral'];?></td>
                        <td><?php echo $row['otro_ambito']; ?></td>
                    </tr>
                    </tbody>
                </table>
                </div>
        </div>
    </div>
</div>
<br><br>
<div class="container">
  <center><h3 style="font-family: 'Quicksand', sans-serif;">Tipo de violencia</h3></center>
  <table class="table" style="text-align:center; font-size:70%;">
    <thead>
      <tr class="table-primary">
        <th>violencia_sexual</th>
        <th>negligencia_y_abandono</th>
        <th>psicologica</th>
        <th>fisica</th>
      </tr>
    </thead>
    <tbody>   
      <tr class="table-light">
        <td><?php echo $row['violencia_sexual'];?></td>
        <td><?php echo $row['negligencia_y_abandono']; ?></td>
        <td><?php echo $row['psicologica']; ?></td>
        <td><?php echo $row['fisica']; ?></td>
      </tr>
    </tbody>
  </table>
</div>

        
<footer style="padding-top:1px;">
    <center><img src="assets/imagenes/ucc.png" width="150" alt=""><h6></center>
</footer>


</body>
</html>