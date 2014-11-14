<?php

$db = new SQLite3("../base.db");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$raza = $_POST['raza'];
$edad = $_POST['edad'];

$consulta = 'UPDATE felinos SET nombre="'.$nombre.'" , raza="'.$raza.'" , edad="'.$edad.'" WHERE id= "'.$id.'"; ';

$result = $db-> exec ($consulta);
//echo $id . "   --     " . $consulta;

if($result){
	echo $nombre ."Fue modificado satisfactoriamente.";

}else {

	echo "error al modificar a" . $nombre ;
}
?>
	<br /> <br />
<a href="../felinos.php"> Atras</a>
 	<br /> <br />
<a href="index.php"> Volver Pagina Principal </a>
 	<br /> <br />

