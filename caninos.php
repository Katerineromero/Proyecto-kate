<!DOCTYPE html>
<html>
<head>
	<title>CANINOS *_*</title>
	<meta charset="utf8"/>
</head>
<body>
<?php 
$db = new SQLite3("base.db");
$usus = $db->query("SELECT * FROM caninos;");

?>
<h1>BIENVENIDOS A CANINOS	</h1>

<a href="canino/caninocrear.php"> Crear nuevo </a>
<br /> <br />
<table border="1px">
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Raza</td>
		<td>Edad</td>
		
	</tr>
<?php
while ( $fila = $usus->fetchArray()) {
?> 
<tr>
	<td> <?php  echo $fila['Id'] ;?></td>
	<td> <?php  echo $fila['Nombre'] ;?></td>
	<td><?php echo $fila['Raza'];?></td>
	<td><?php echo $fila['Edad'];?></td>
	<td>
		<a href="canino/caninomodificar.php?id=<?php echo $fila['Id']; ?>">Editar</a>
		<a class="eliminarUsu" href="canino/caninoeliminar.php?id=<?php echo $fila['Id']; ?>">Eliminar </a>

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