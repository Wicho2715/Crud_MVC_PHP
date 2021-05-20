<?php require_once '../Dao/roldao.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="whidth=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Roles</title>
</head>
	<body> 
	<h1>Roles</h1>
	<h2>Listar</h2>

	<a href="V_grol.php">Nuevo</a>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th colspan="2">Opciones</th>
					<?php foreach (RolesDAO::listarDatos() as $fila);?>
						<tr>
							<td>
								<?= $fila[0] ?>
							</td>
							<td>
								<?= $fila[1] ?>
							</td>
							<td>
								<a href="editar.php?id=<?$fila[0]?>">Editar</a>
								<a href="../Controllers/C_rol.php?a=elim&id=<?$fila[0]?>" onclick="return confirm('¿Desea eliminar el dato?')">Eliminar</a>
							</td>
						</tr>
					<?php endforeach; ?>
					 
				</tr>
			</thead>
		</table>
	</body>
</html>

