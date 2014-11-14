<?php

$db = new SQLite3("../base.db");
$codigo = $_GET['id'];
$eliminar = $db->exec("DELETE FROM felinos WHERE Id=$codigo");



if ($eliminar ) {

	echo " felino eliminado correctamente. ";
}else{
	echo "no se pudo eliminar. ". $db->lastErrorMsg();

}


?>
	<br /> <br />
<a href="../felinos.php"> Atras</a>
 	<br /> <br />
<a href="index.php"> Volver Pagina Principal </a>
 	<br /> <br />
























