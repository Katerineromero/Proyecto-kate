 <!DOCTYPE html>
 <html>
 <head>
 	<title>MODIFICAR REPTILES</title>
 	<meta charset="utf8"/>
 </head>
 <body>
 <h1>MODIFICAR REPTILES</h1>
<?php
$id = $_GET['id'];

$db = new SQLite3("../base.db");
$usu = $db->query ("SELECT * FROM reptiles WHERE id='$id';");

$row = $usu -> fetchArray();


?>
 <form  action="reptilesctualizar.php" method="POST">
 	<label>id:</label><label><?php echo $id ; ?></label>
 	<br><br/>
 	<input type="hidden" name="id" value="<?php echo $id ; ?>">
 	<label>Nombre</label>
 	<input type="text" name="nombre" value="<?php echo $row['Nombre']; ?>">
 	<br/><br/>
 	<label>Especie</label>
 	<input type="text" name="especies" value="<?php echo $row['Especie']; ?>">
 	<input type="submit" value="actualizar">
 	<br /><br/>
 	<a href="../reptiles.php"> Atras</a>
 	<br /><br/>
 </form>
 </body>
 </html>  