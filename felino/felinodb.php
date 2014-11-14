<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$db = new SQLite3("../base.db");
$usus = $db->query ("SELECT * FROM felinos;");
?>

<h1>BIENVENIDO:: FELINOS</h1>
<table border= "1px">
	<tr>
		<td>id</td>
		<td>nombre</td>
		<td>raza</td>
		<td>edad</td>
		

	</tr>
<?php
while ($fila = $usus-> fetchArray() ) {
	
	?>
	<tr>
		<td><?php echo $fila['Id']; ?></td>
		<td><?php echo $fila['Nombre']; ?></td>
		<td><?php echo $fila['Raza']; ?></td>
		<td><?php echo $fila['Edad']; ?></td>
		<a href="felino/felinoeditar.php?id=<?php echo $fila['id']; ?>"> Editar</a>
		 <a href="felino/felinoeliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a> 
		 </td>

	</tr>
	<?php
}

?>
	

</table>
</body>
</html>