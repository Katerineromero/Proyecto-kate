 <!DOCTYPE html>
 <html>
 <head>
 	<title>MODIFICAR USUARIO</title>
 </head>
 <body>
 <h1>Modificar Usuario</h1>
<?php
$id = $_GET['id'];

$db = new SQLite3("base.db");
$usu = $db->query ("SELECT * FROM tbusuarios WHERE id='$id';");

$row = $usu -> fetchArray();


?>
 <form  action="actualizarUsuario.php" method="POST">
 	<label>id:</label><label><?php echo $id ; ?></label>
 	<br><br/>
 	<input type="hidden" name="id" value="<?php echo $id ; ?>">
 	<label>Nombre</label>
 	<input type="text" name="nombre" value="<?php echo $row['Nombre']; ?>">
 	<br/><br/>
 	<label>Apellido</label>
 	<input type="text" name="apellido" value="<?php echo $row['Apellido']; ?>">
 	<br/><br/>
 	<label>Mascota</label>
 	<input type="text" name="mascota" value="<?php echo $row['Mascota']; ?>">
 	<input type="submit" value="actualizar">
 	<br/><br/>
 	<a href="principal.php"> Atras  </a>
 	<br /> <br />
 </form>
 </body>
 </html>  