<?php  
    require_once '..Dao/D_roldao.php';

    $rol = RolesDao::buscarPorid($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="whidth=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
</head>
	<body> 
	<h1>Roles</h1>
	<h2>Editar</h2>

	<form action="../Controllers/C_rol.php?a=edit" method="POST">
        <input type="hidden" name="id" value="<?=$rol[0]?>">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre" value="<?=$rol[1]?>" required >

        <input type="submite" value="Editar">
    </form>
	</body>
</html>

