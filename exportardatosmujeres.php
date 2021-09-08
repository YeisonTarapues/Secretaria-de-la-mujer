<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=Registros mujeres.xls');

		class Conexion{
			var $ruta;
			var $usuario;
			var $contrasena;
			var $baseDatos;

			function Conexion(){
				$this->ruta       ="localhost"; //
				$this->usuario    ="root"; //usuario que tengas definido
				$this->contrasena =""; //contraseña que tengas definidad
				$this->baseDatos  ="prueba"; //base de datos personas, si quieres utilizar otra base de datos solamente cambiala
			}

			function conectarse(){
				//---------------------------TIPO DE CONEXION 1-----------------------------------
				/*$conectarse= mysql_connect($this->ruta,$this->usuario, $this->contrasena) or die(mysql_error()); //conexion al BD
				if($conectarse){
					mysql_select_db($this->baseDatos);
					return($conectarse);
				}else{
					return ("Error");
					}*/
				//------------------------TIPO DE CONEXION 2 - RECOMENDADA---------------------------------------------
				$enlace = mysqli_connect($this->ruta, $this->usuario, $this->contrasena, $this->baseDatos);
				if($enlace){
					echo "Registros de mujeres";	//si la conexion fue exitosa nos muestra este mensaje como prueba, despues lo puedes poner comentarios de nuevo: //
				}else{
					die('Error de Conexión (' . mysqli_connect_errno() . ') '.mysqli_connect_error());
				}
				return($enlace);
				// mysqli_close($enlace); //cierra la conexion a nuestra base de datos, un ounto de seguridad importante.
			}
		}


	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM mujeres";
	$result=mysqli_query($link, $query);
?>

<table border="1">
	<tr style="background-color:#FFA6EC;">
		<th>Idregistromujeres</th>
		<th>Municipio</th>
		<th>Mes</th>
		<th>Año</th>
		<th>Numero de mujeres</th>
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
		<th>indigena</th>
        <th>afrocolombiano</th>
        <th>gitano</th>
        <th>palenquero</th>
		<th>otra etnia</th>
		<th>contributivo</th>
        <th>especial</th>
        <th>no_asegurado</th>
        <th>excepcion</th>
		<th>subsidiado</th>
		<th>cabecera_municipal</th>
        <th>centro_poblado</th>
        <th>rural_disperso</th>
        <th>soltero</th>
        <th>viudo</th>
        <th>casado</th>
        <th>divorciado</th>
        <th>uno</th>
        <th>dos</th>
        <th>tres</th>
        <th>cuatro</th>
        <th>cinco</th>
        <th>seis</th>
		<th>educacion_basica</th>
		<th>educacion_media</th>
		<th>educacion_superior</th>
		<th>otro_nivel_educativo</th>
        <th>madre</th>
        <th>pareja</th>
        <th>expareja</th>
        <th>familiar</th>
        <th>padre</th>
        <th>ningun_parentesco</th>
        <th>institucional</th>
        <th>escolar</th>
        <th>hogar</th>
        <th>comunitario</th>
        <th>manera_virtual</th>
        <th>laboral</th>
        <th>otro_ambito</th>
        <th>violencia_sexual</th>
        <th>negligencia_y_abandono</th>
        <th>psicologica</th>
        <th>fisica</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['idregistromujeres']; ?></td>
					<td><?php echo $row['municipio']; ?></td>
					<td><?php echo $row['mes']; ?></td>
					<td><?php echo $row['anno']; ?></td>
					<td><?php echo $row['numero_mujeres']; ?></td>
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
					<td><?php echo $row['indigena'];?></td>
                    <td><?php echo $row['afrocolombiano']; ?></td>
                    <td><?php echo $row['gitano']; ?></td>
                    <td><?php echo $row['palenquero']; ?></td>
                    <td><?php echo $row['otra_etnia']; ?></td>
                    <td><?php echo $row['contributivo'];?></td>
                    <td><?php echo $row['especial']; ?></td>
                    <td><?php echo $row['no_asegurado']; ?></td>
                    <td><?php echo $row['excepcion']; ?></td>
                    <td><?php echo $row['subsidiado']; ?></td>
                    <td><?php echo $row['cabecera_municipal'];?></td>
                    <td><?php echo $row['centro_poblado']; ?></td>
                    <td><?php echo $row['rural_disperso']; ?></td>
                    <td><?php echo $row['soltero'];?></td>
                    <td><?php echo $row['viudo']; ?></td>
                    <td><?php echo $row['casado']; ?></td>
                    <td><?php echo $row['divorciado']; ?></td>
                    <td><?php echo $row['uno'];?></td>
                    <td><?php echo $row['dos']; ?></td>
                    <td><?php echo $row['tres']; ?></td>
                    <td><?php echo $row['cuatro']; ?></td>
                    <td><?php echo $row['cinco']; ?></td>
                    <td><?php echo $row['seis']; ?></td>
                    <td><?php echo $row['educacion_basica'];?></td>
                    <td><?php echo $row['educacion_media']; ?></td>
                    <td><?php echo $row['educacion_superior']; ?></td>
                    <td><?php echo $row['otro_nivel_educativo']; ?></td>
					<td><?php echo $row['madre'];?></td>
					<td><?php echo $row['pareja']; ?></td>
					<td><?php echo $row['expareja']; ?></td>
					<td><?php echo $row['familiar']; ?></td>
					<td><?php echo $row['padre']; ?></td>
					<td><?php echo $row['ningun_parentesco'];?></td>
                	<td><?php echo $row['institucional'];?></td>
                	<td><?php echo $row['escolar']; ?></td>
                	<td><?php echo $row['hogar']; ?></td>
                	<td><?php echo $row['comunitario']; ?></td>
                	<td><?php echo $row['manera_virtual']; ?></td>
                	<td><?php echo $row['laboral'];?></td>
                	<td><?php echo $row['otro_ambito']; ?></td>
					<td><?php echo $row['violencia_sexual'];?></td>
					<td><?php echo $row['negligencia_y_abandono']; ?></td>
					<td><?php echo $row['psicologica']; ?></td>
					<td><?php echo $row['fisica']; ?></td>


				</tr>	

			<?php
		}

	?>
</table>

