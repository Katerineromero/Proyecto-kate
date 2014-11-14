<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$db = new SQLite3("base.db");
$usus = $db->query ("SELECT * FROM tbusuarios;");
?>

<h1>BIENVENIDO:: USUARIO</h1>
<table border= "1px">
	<tr>
		<td>id</td>
		<td>nombre</td>
		<td>apellido</td>
		<td>editar</td>
		<td>Mascota</td>

	</tr>
<?php
while ($fila = $usus-> fetchArray() ) {
	
	?>
	<tr>
		<td><?php echo $fila['Id']; ?></td>
		<td><?php echo $fila['Nombre']; ?></td>
		<td><?php echo $fila['Apellido']; ?></td>
		<td><?php echo $fila['Mascota']; ?></td>
		<a href="editarusuarios.php?id=<?php echo $fila['id']; ?>"> Editar</a>
		 <a href="eliminarusuarios.php?id=<?php echo $fila['id']; ?>">Eliminar</a> 
		 </td>

	</tr>
	<?php
}

?>
	

</table>
</body>
</html>