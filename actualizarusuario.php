<?php

$db = new SQLite3('base.db');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$consulta = 'UPDATE tbusuarios SET nombre="'.$nombre.'" , apellido="'.$apellido.'" WHERE id= "'.$id.'"; ';

$result = $db-> exec ($consulta);
//echo $id . "   --     " . $consulta;

if($result){
	echo $nombre ."Fue modificado satisfactoriamente.";

}else {

	echo "error al modificar a" . $nombre ;
}
?>

	<br /> <br />
<a href="principal.php"> Atras</a>
 	<br /> <br />
<a href="index.php"> Volver Pagina Principal </a>
 	<br /> <br />

