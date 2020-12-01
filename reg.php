<?php

include("con_db.php");

if (isset($_POST['register'])) {
	if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1){
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$consulta = "INSERT INTO datos(Nombre, Email) VALUES ('$name','$email')";
		$resultado = mysqli_query($conex,$consulta);

		

	}
}

?>