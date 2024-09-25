<?php

$conexion=mysqli_connect('localhost', 'root', '', 'alumnos');


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>mostrar datos</title>
</head>
<body>

	<table border="1">
		
		<tr>
			<td>idalumno</td>
			<td>nombre</td>
			<td>apellidopat</td>
			<td>apellidomat</td>
			<td>telefono</td>
			<td>edad</td>
			<td>localidad</td>
			<td>estado</td>
			<td>direccion</td>
			<td>numero de casa</td>
			<td>codigo postal</td>
		</tr>

		<?php

			$sql = "SELECT * from alumnos";
			$result= mysqli_query($conexion, $sql);


			while ($mostrar=mysqli_fetch_array($result)) {
				

			?>

			 <tr>
			 	<td><?php echo $mostrar ['IDALUMNO']?></td>
			 	<td><?php echo $mostrar ['NOMBRE']?></td>
			 	<td><?php echo $mostrar ['APELLIDOPAT']?></td>
			 	<td><?php echo $mostrar ['APELLIDOMAT']?></td>
			 	<td><?php echo $mostrar ['TELEFONO']?></td>
			 	<td><?php echo $mostrar ['EDAD']?></td>
			 	<td><?php echo $mostrar ['LOCALIDAD']?></td>
			 	<td><?php echo $mostrar ['ESTADO']?></td>
			 	<td><?php echo $mostrar ['DIRECCION']?></td>
			 	<td><?php echo $mostrar ['NUMERO DE CASA']?></td>
			 	<td><?php echo $mostrar ['CODIGO POSTAL']?></td>
			 	
			 </tr>	
		<?php
		}
		?>
	</table>

</body>
</html>