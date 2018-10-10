<?php 
	session_start();
	if (!$_SESSION['validar']) {
		header('location:index.php?action=ingresar');
		exit();
	}
?>

<h1>Eliminar</h1>

	<form method="post" action="">

		<input type="password" placeholder="Contraseña" name="password" required>

		<input type="submit" value="Enviar">

	</form>

<?php

$borrar = new MvcController();
$borrar->getPasswordController();


?>