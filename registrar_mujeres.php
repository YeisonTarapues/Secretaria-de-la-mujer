<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/estilos.css">

  <link rel="stylesheet" href="css/animate.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
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
              <a class="dropdown-item" href="registrar_mujeres.php"><i class="fas fa-plus-circle"></i> Agregar mujeres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="exportardatos.php"><i class="fas fa-file-export"></i> Exportar datos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="salir.php"><i class="fas fa-power-off"></i> Cerrar sesion</a>
          </li>
</nav>

<!-- <section class="container">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
            
          <form action="registrar.php" method="POST">
            <div class="row">
                <div class="col">
                  <input type="text" name="primer_nombre" class="form-control" placeholder="primer_nombre">
                </div>
                <div class="col">
                  <input type="text" name="segundo_nombre" class="form-control" placeholder="segundo_nombre">
                </div>
                <div class="col">
                  <input type="text" name="primer_apellido" class="form-control" placeholder="primer_apellido">
                </div>
                <div class="col">
                  <input type="text" name="segundo_apellido" class="form-control" placeholder="segundo_apellido">
                </div>
                <div class="col">
                  <input type="text" name="edad" class="form-control" placeholder="edad">
                </div>
                <div class="col">
                <select name="sexo" class="form-control" id="exampleFormControlSelect1">
                    <option>Masculino</option>
                    <option>Femenino</option>
                  </select>
                </div>
                  <input type="submit" name="registrar" value="Registrar" class="btn-enviar">
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
 </section>
-->
<br>
 <section class="container">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title" style="text-align:center;">Registrar Mujeres</h5>
            <br>
          <form action="registrarmujeres.php" method="POST">
            <div class="row">
                <div class="col">
                  <input type="text" name="idregistromujeres" class="form-control" placeholder="ID = Año/Mes/Municipio" title="01-Monteria, 02-Ayapel, 03-Buenavista, 04-Canalete, 05-Cerete, 06-Chima, 07-Chinu, 08-Cienaga de Oro, 09-Cotorra, 10-La Apartada, 11-Los Cordoba, 12-Montelibano, 13-Momil, 14-Moñitos, 15-Planeta Rica, 16-Pueblo Nuevo, 17-Puerto Escondido, 18-Puerto Libertador, 19-Purisima de la Concepcion, 20-Sahagun, 21-San Andres de Sotavento, 22-San Antero, 23-San Bernardo del Viento, 24-San Carlos, 25-San Jose de Ure, 26-San Pelayo, 27-Lorica, 28-Tierralta, 29-Tuchin, 30-Valencia">
                </div>
                <div class="col">
                  <select name="municipio" class="form-control" >
                    <option selected>Municipio</option>
                    <option>Monteria</option>
                    <option>Ayapel</option>
                    <option>Buenavista</option>
                    <option>Canalete</option>
                    <option>Cerete</option>
                    <option>Chima</option>
                    <option>Chinu</option>
                    <option>Cienaga de Oro</option>
                    <option>Cotorra</option>
                    <option>La Apartada</option>
                    <option>Los Cordoba</option>
                    <option>Montelibano</option>
                    <option>Momil</option>
                    <option>Moñitos</option>
                    <option>Planeta Rica</option>
                    <option>Pueblo Nuevo</option>
                    <option>Puerto Escondido</option>
                    <option>Puerto Libertador</option>
                    <option>Purisima de la Concepcion</option>
                    <option>Sahagun</option>
                    <option>San Andres de Sotavento</option>
                    <option>San Antero</option>
                    <option>San Bernardo del Viento</option>
                    <option>San Carlos</option>
                    <option>San Jose de Ure</option>
                    <option>San Pelayo</option>
                    <option>Lorica</option>
                    <option>Tierralta</option>
                    <option>Tuchin</option>
                    <option>Valencia</option>
                    </select>
                </div>
                <div class="col">
                  <select name="mes" class="form-control" >
                    <option selected>Mes</option>
                        <option>Enero</option>
                        <option>Febrero</option>
                        <option>Marzo</option>
                        <option>Abril</option>
                        <option>Mayo</option>
                        <option>Junio</option>
                        <option>Julio</option>
                        <option>Agosto</option>
                        <option>Septiembre</option>
                        <option>Octubre</option>
                        <option>Noviembre</option>
                        <option>Diciembre</option>
                  </select>
                </div>
                <div class="col">
                  <input type="text" name="año" class="form-control" placeholder="Año">
                </div>
                <div class="col">
                  <input type="text" name="numero_mujeres" class="form-control" placeholder="Numero de mujeres">
                </div>
              </div>
            </div>
            <hr>
            <h5 style="text-align:center;">Edades</h5>
            <br>
                <div class="container">
                <div class="row">
                    <div class="col">
                        <input type="text" name="edad_entre_0_a_4" class="form-control" placeholder="Edad entre 0 a 4">
                      </div>
                    <div class="col">
                      <input type="text" name="edad_entre_5_a_9" class="form-control" placeholder="Edad entre 5 a 9 ">
                    </div>
                    <div class="col">
                        <input type="text" name="edad_entre_10_a_14" class="form-control" placeholder="Edad entre 10 y 14 ">
                      </div>
                      <div class="col">
                          <input type="text" name="edad_entre_15_a_19" class="form-control" placeholder="Edad entre 15 a 19 ">
                        </div>
                      <div class="col">
                          <input type="text" name="edad_entre_20_a_24" class="form-control" placeholder="Edad entre 20 a 24 ">
                      </div>
                      <div class="col">
                          <input type="text" name="edad_entre_25_a_29" class="form-control" placeholder="Edad Entre 25 a 29  ">
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col">
                          <input type="text" name="edad_entre_30_a_34" class="form-control" placeholder="Edad Entre 30 a 34">
                        </div>
                      <div class="col">
                        <input type="text" name="edad_entre_35_a_39" class="form-control" placeholder="Edad entre 35 a 39">
                      </div>
                      <div class="col">
                          <input type="text" name="edad_entre_40_a_44" class="form-control" placeholder="Edad entre 40 a 44">
                        </div>
                        <div class="col">
                            <input type="text" name="edad_entre_45_a_49" class="form-control" placeholder="Edad entre 45 a 49">
                          </div>
                        <div class="col">
                            <input type="text" name="edad_entre_55_a_59" class="form-control" placeholder="Edad Entre 55 a 59">
                        </div>
                        <div class="col">
                            <input type="text" name="edad_mayor_de_60" class="form-control" placeholder="Edad Mayor de 60">
                        </div>
                    </div>
                    <hr>
                    <h5 class="card-title" style="text-align:center;">Pertenencia etnica</h5>
                    <br>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="indigena" class="form-control" placeholder="Indígena">
                          </div>
                        <div class="col">
                          <input type="text" name="afrocolombiano" class="form-control" placeholder="Afrocolombiano">
                        </div>
                        <div class="col">
                            <input type="text" name="gitano" class="form-control" placeholder="Gitano">
                          </div>
                          <div class="col">
                              <input type="text" name="palenquero" class="form-control" placeholder="Palenquero">
                            </div>
                          <div class="col">
                              <input type="text" name="otra_etnia" class="form-control" placeholder="Otro">
                          </div>
                      </div>
                      <hr>
                      <h5 class="card-title" style="text-align:center;">Tipo de regimen</h5>
                      <br>
                      <div class="row">
                          <div class="col">
                              <input type="text" name="contributivo" class="form-control" placeholder="Contributivo">
                            </div>
                          <div class="col">
                            <input type="text" name="especial" class="form-control" placeholder="Especial">
                          </div>
                          <div class="col">
                              <input type="text" name="no_asegurado" class="form-control" placeholder="No asegurado">
                            </div>
                            <div class="col">
                                <input type="text" name="excepcion" class="form-control" placeholder="Excepción">
                              </div>
                            <div class="col">
                                <input type="text" name="subsidiado" class="form-control" placeholder="Subsidiado">
                            </div>
                        </div>
                        <hr>
                        <h5 class="card-title" style="text-align:center;">Area</h5>
                        <br>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="cabecera_municipal" class="form-control" placeholder="Cabecera municipal">
                              </div>
                            <div class="col">
                              <input type="text" name="centro_poblado" class="form-control" placeholder="Centro poblado">
                            </div>
                            <div class="col">
                                <input type="text" name="rural_disperso" class="form-control" placeholder="Rural disperso">
                          </div>
                        </div>
                        <hr>
                        <h5 class="card-title"style="text-align:center;">Estado civil</h5>
                        <br>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="soltero" class="form-control" placeholder="Soltero">
                              </div>
                            <div class="col">
                              <input type="text" name="viudo" class="form-control" placeholder="Viudo">
                            </div>
                            <div class="col">
                                <input type="text" name="casado" class="form-control" placeholder="Casado">
                          </div>
                          <div class="col">
                              <input type="text" name="divorciado" class="form-control" placeholder="Divorciado">
                        </div>
                        </div>
                        <hr>
                        <h5 class="card-title" style="text-align:center;">Estrato</h5>
                        <br>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="uno" class="form-control" placeholder="1">
                              </div>
                            <div class="col">
                              <input type="text" name="dos" class="form-control" placeholder="2">
                            </div>
                            <div class="col">
                              <input type="text" name="tres" class="form-control" placeholder="3">
                            </div>
                          <div class="col">
                              <input type="text" name="cuatro" class="form-control" placeholder="4">
                          </div>
                          <div class="col">
                            <input type="text" name="cinco" class="form-control" placeholder="5">
                          </div>
                          <div class="col">
                            <input type="text" name="seis" class="form-control" placeholder="6">
                          </div>
                        </div>
                        <hr>
                        <h5 class="card-title" style="text-align:center;">Nivel educativo</h5>
                        <br>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="educacion_basica" class="form-control" placeholder="Educacion Basica">
                              </div>
                            <div class="col">
                              <input type="text" name="educacion_media" class="form-control" placeholder="Educacion Media">
                            </div>
                            <div class="col">
                              <input type="text" name="educacion_superior" class="form-control" placeholder="Educacion Superior">
                            </div>
                            <div class="col">
                          <input type="text" name="otro_nivel_educativo" class="form-control" placeholder="Otro nivel educativo">
                            </div>
                        </div>
                        <hr>
                        <h5 class="card-title" style="text-align:center;">Ambito de la violencia</h5>
                        <br>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="institucional" name="otro_nivel_educativo" class="form-control" placeholder="Institucional">
                              </div>
                            <div class="col">
                              <input type="text" name="escolar" class="form-control" placeholder="Escolar">
                            </div>
                            <div class="col">
                                <input type="text" name="hogar" class="form-control" placeholder="Hogar">
                            </div>
                            <div class="col">
                              <input type="text" name="comunitario" class="form-control" placeholder="Comunitario">
                            </div>
                            <div class="col">
                              <input type="text" name="manera_virtual" class="form-control" placeholder="Virtual ">
                            </div>
                            <div class="col">
                              <input type="text" name="laboral" class="form-control" placeholder="Laboral">
                            </div>
                            <div class="col">
                              <input type="text" name="otro_ambito"  class="form-control" placeholder="Otros ámbitos ">
                          </div>
                        </div>
                        <hr>
                        <h5 class="card-title" style="text-align:center;">Parentesco con la victima</h5>
                        <br>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="madre" class="form-control" placeholder="Madre">
                              </div>
                            <div class="col">
                              <input type="text" name="pareja" class="form-control" placeholder="Pareja">
                            </div>
                            <div class="col">
                              <input type="text" name="expareja" class="form-control" placeholder="Expareja">
                            </div>
                            <div class="col">
                              <input type="text" name="familiar" class="form-control" placeholder="Familiar">
                            </div>
                            <div class="col">
                              <input type="text" name="padre" class="form-control" placeholder="Padre ">
                            </div>
                            <div class="col">
                              <input type="text" name="ningun_parentesco" class="form-control" placeholder="Ningún parentesco">
                            </div>
                        </div>
                        <hr>
                        <h5 class="card-title" style="text-align:center;">Tipo de violencia</h5>
                        <br>
                        <div class="row">
                            <div class="col">
                              <input type="text" name="violencia_sexual" class="form-control" placeholder="Violencia sexual">
                            </div>
                            <div class="col">
                              <input type="text" name="negligencia_y_abandono" class="form-control" placeholder="Negligencia y abandono">
                            </div>
                            <div class="col">
                              <input type="text" name="psicologica" class="form-control" placeholder="Psicológica">
                            </div>
                            <div class="col">
                              <input type="text" name="fisica" class="form-control" placeholder="Física">
                            </div>
                        </div>
                        <br>
                        <center><input type="submit" name="registrar" value="Registrar" class="btn btn-primary"></center>
                    </div>
                        <br>
                </div>
          </form>
        </div>
      </div>
 </section>


        
 <footer style="padding-top:1px;">
    <center><img src="assets/imagenes/ucc.png" width="150" alt=""><h6></center>
</footer>








</body>
</html>