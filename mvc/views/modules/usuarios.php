<?php 
	session_start();
	if (!$_SESSION['validar']) {
		header('location:index.php?action=ingresar');
		exit();
	}
	if (isset($_GET['password'])) {
		$password= $_GET['password'];
	}
?>

<h1>USUARIOS</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				<th>ID</th>
				<th>Usuario</th>
				<th>Contraseña</th>
				<th>Email</th>
				<th colspan="2">Acciones</th>

			</tr>

		</thead>

		<tbody>
		
			<?php 
				$listado = new MvcController();
				$listado->getUsers();
				//$listado->getPasswordController();
			?>

		</tbody>

	</table>


<?php
	if (isset($_GET['action'])) {

		if ($_GET['action'] == 'cambio') {
			echo 'Usuario actualizado';
		}
		
	}
?>