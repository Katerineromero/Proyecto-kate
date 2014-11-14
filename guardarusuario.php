<?php

$db = new SQLite3("base.db");
$nom=$_POST['nombre'];

$ape=$_POST['apellido'];

$masc=$_POST['mascota'];

 

$db-> exec("INSERT INTO tbusuarios (Nombre , Apellido , Mascota ) VALUES('$nom','$ape' , '$masc')");
if($db) {
	echo "Usuarios " . $nom . " fue creado satisfatoriamente";
} else {
	echo " No se puedo crear a " . $nom; 
}


?>
	
	<br /> <br />
<a href="principal.php"> Atras</a>
 	<br /> <br />
<a href="index.php"> Volver Pagina Principal </a>
 	<br /> <br />