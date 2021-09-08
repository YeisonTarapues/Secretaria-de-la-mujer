 <?php

require 'conexion.php';
session_start();


$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$q = "SELECT COUNT(*) as contar FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave' ";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username'] = $usuario;
    header ("location: paginaadmin.php");
}else{
    echo '<script>
    alert("Error: Datos incorrectos");
    window.history.go(-1);
     </script>';
}


 ?>