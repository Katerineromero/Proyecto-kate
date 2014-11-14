<?php

$db = new SQLite3("../base.db");
$nom=$_POST['nombre'];

$especies=$_POST['especies'];




$db-> exec("INSERT INTO aves (Nombre , especies  ) VALUES('$nom', '$especies')");
if($db) {
	echo "aves " . $nom . " fue creado satisfatoriamente";
} else {
	echo " No se puedo crear a " . $nom; 
}


?>
	<br /> <br />
<a href="../aves.php"> Atras</a>
 	<br /> <br />
<a href="../index.php"> Volver Pagina Principal </a>
 	<br /> <br />