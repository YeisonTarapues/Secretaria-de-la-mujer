<?php

 require 'conexion.php';
 session_start();
 
//Recibir los datos y almacenarlos en variables
$idregistrohombres = $_POST["idregistrohombres"];
$municipio = $_POST["municipio"];
$mes = $_POST["mes"];
$año = $_POST["año"];
$numero_hombres = $_POST["numero_hombres"];
//Edades
$edad_entre_0_a_4 = $_POST["edad_entre_0_a_4"];
$edad_entre_5_a_9 = $_POST["edad_entre_5_a_9"];
$edad_entre_10_a_14 = $_POST["edad_entre_10_a_14"];
$edad_entre_15_a_19 = $_POST["edad_entre_15_a_19"];
$edad_entre_20_a_24 = $_POST["edad_entre_20_a_24"];
$edad_entre_25_a_29 = $_POST["edad_entre_25_a_29"];
$edad_entre_30_a_34 = $_POST["edad_entre_30_a_34"];
$edad_entre_35_a_39 = $_POST["edad_entre_35_a_39"];
$edad_entre_40_a_44 = $_POST["edad_entre_40_a_44"];
$edad_entre_45_a_49 = $_POST["edad_entre_45_a_49"];
$edad_entre_55_a_59 = $_POST["edad_entre_55_a_59"];
$edad_mayor_de_60 = $_POST["edad_mayor_de_60"];
//
$indigena = $_POST["indigena"];
$afrocolombiano = $_POST["afrocolombiano"];
$gitano = $_POST["gitano"];
$palenquero = $_POST["palenquero"];
$otra_etnia = $_POST["otra_etnia"];
//
$contributivo = $_POST["contributivo"];
$especial = $_POST["especial"];
$no_asegurado = $_POST["no_asegurado"];
$excepcion = $_POST["excepcion"];
$subsidiado = $_POST["subsidiado"];
//
$cabecera_municipal = $_POST["cabecera_municipal"];
$centro_poblado = $_POST["centro_poblado"];
$rural_disperso = $_POST["rural_disperso"];
//
$soltero = $_POST["soltero"];
$viudo = $_POST["viudo"];
$casado = $_POST["casado"];
$divorciado = $_POST["divorciado"];
//
$uno = $_POST["uno"];
$dos = $_POST["dos"];
$tres = $_POST["tres"];
$cuatro = $_POST["cuatro"];
$cinco = $_POST["cinco"];
$seis = $_POST["seis"];
//
$educacion_basica = $_POST["educacion_basica"];
$educacion_media = $_POST["educacion_media"];
$educacion_superior = $_POST["educacion_superior"];
$otro_nivel_educativo = $_POST["otro_nivel_educativo"];
//
$institucional = $_POST["institucional"];
$escolar = $_POST["escolar"];
$hogar = $_POST["hogar"];
$comunitario = $_POST["comunitario"];
$manera_virtual = $_POST["manera_virtual"];
$laboral = $_POST["laboral"];
$otro_ambito = $_POST["otro_ambito"];
//
$madre = $_POST["madre"];
$pareja = $_POST["pareja"];
$expareja = $_POST["expareja"];
$familiar = $_POST["familiar"];
$padre = $_POST["padre"];
$ningun_parentesco = $_POST["ningun_parentesco"];
//
$violencia_sexual = $_POST["violencia_sexual"];
$negligencia_y_abandono = $_POST["negligencia_y_abandono"];
$psicologica = $_POST["psicologica"];
$fisica = $_POST["fisica"];




//Consulta para insertar
$insertar = "INSERT INTO hombres VALUES ('$idregistrohombres', '$municipio', '$mes', '$año', '$numero_hombres', '$edad_entre_0_a_4', '$edad_entre_5_a_9', '$edad_entre_10_a_14', '$edad_entre_15_a_19', '$edad_entre_20_a_24', '$edad_entre_25_a_29', '$edad_entre_30_a_34', '$edad_entre_35_a_39', '$edad_entre_40_a_44', '$edad_entre_45_a_49', '$edad_entre_55_a_59', '$edad_mayor_de_60', '$indigena', '$afrocolombiano', '$gitano', '$palenquero', '$otra_etnia', '$contributivo', '$especial', '$no_asegurado', '$excepcion', '$subsidiado', '$cabecera_municipal', '$centro_poblado', '$rural_disperso', '$soltero', '$viudo', '$casado', '$divorciado', '$uno', '$dos', '$tres', '$cuatro', '$cinco', '$seis', '$educacion_basica', '$educacion_media', '$educacion_superior', '$otro_nivel_educativo', '$institucional', '$escolar', '$hogar', '$comunitario', '$manera_virtual', '$laboral', '$otro_ambito', '$madre', '$pareja', '$expareja', '$familiar', '$padre', '$ningun_parentesco', '$violencia_sexual', '$negligencia_y_abandono', '$psicologica', '$fisica')";

//$verificar_registro = mysqli_query($conexion, "SELECT * FROM hombres WHERE municipio = '$mes'");
//if (mysqli_num_rows($verificar_registro) > 0){
//    echo '<script>
//            alert("Los datos ya se han registrado municipio - mes - año");
//            window.history.go(-1);
//            </script>';
//    exit;
//}

//ejecutar consulta

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado){
    echo '<script>
            alert("Error: Ingrese la informacion correspondiente");
            window.history.go(-1);
             </script>';

} else{
    echo    '<script>
            alert("Registro exitoso");
            window.history.go(-1);
            </script>';
}

mysqli_close($conexion);
?>