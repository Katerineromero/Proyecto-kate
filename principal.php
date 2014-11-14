<!DOCTYPE html>
<html>
<head>
	<title>USUARIOS *_*</title>
</head>
<body>
<?php 
$db = new SQLite3('base.db');
$usus = $db->query("SELECT * FROM tbusuarios;");

?>
<h1>BIENVENIDOS A USUARIOS	</h1>

<a href="crearusuario.php"> Crear nuevo </a>
<br /> <br />
<table border="1px">
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Mascota</td>
		<td>Editar</td>
	</tr>
<?php
while ( $fila = $usus->fetchArray()) {
?> 
<tr>
	<td> <?php  echo $fila['Id'] ;?></td>
	<td> <?php  echo $fila['Nombre'] ;?></td>
	<td><?php echo $fila['Apellido'];?></td>
	<td><?php echo $fila['Mascota'];?></td>
	<td>
		<a href="modificarUsuario.php?id=<?php echo $fila['Id']; ?>">Editar</a>
		<a class="eliminarUsu" href="eliminarUsuario.php?id=<?php echo $fila['Id']; ?>">Eliminar </a>

	</td>
</tr>
<?php  
}
?>
</table>
	<br/><br/>
<a href="index.php"> Atras</a>
 	<br /><br/>
<script type="text/javascript"src="jquery.js"></script>
<script type="text/javascript">


 	$(document).on('ready', function() {

 		$('.eliminarUsu').on('click', function(){
 			if (!confirm('seguro que desea eliminar?'))
 				return false;
 		})
 	})
 	</script>
</body>
</html>