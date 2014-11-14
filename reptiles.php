<!DOCTYPE html>
<html>
<head>
	<title>REPTILES *_*</title>
	<meta charset="utf8"/>
</head>
<body>
<?php 
$db = new SQLite3('base.db');
$usus = $db->query("SELECT * FROM reptiles;");

?>
<h1>BIENVENIDOS A REPTILES	</h1>

<a href="reptiles/reptilescrear.php"> Crear nuevo </a>
<br /> <br />
<table border="1px">
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Especies</td>
		
		
	</tr>
<?php
while ( $fila = $usus->fetchArray()) {
?> 
<tr>
	<td> <?php  echo $fila['Id'] ;?></td>
	<td> <?php  echo $fila['Nombre'] ;?></td>
	<td><?php echo $fila['Especie'];?></td>
	<td>
		<a href="reptiles/reptilesmodificar.php?id=<?php echo $fila['Id']; ?>">Editar</a>
		<a class="eliminarUsu" href="reptiles/reptileseliminar.php?id=<?php echo $fila['Id']; ?>">Eliminar </a>

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