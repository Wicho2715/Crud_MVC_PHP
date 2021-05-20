<?php

require_once '../Dao/D_roldao.php';
require_once '../Models/M_rol.php';

switch ($_GET['a']){
    case 'ingr':
        $r = new Rol();

        $r->nombre = $_POST['nombre'];

    
        RolesDAO::ingresarDato($r);
        break;

    case'edit':
        $r = new Rol();

        $r->id = $_POST['id'];

        $r->nombre = $_POST['nombre']: 
        
        RolesDAO::editarDato($r);
        break;
    
    case'elim':
       
        RolesDAO::eliminarPorid($_GET['id']);
        break;    
}
header("Location: ../Views/V_rol.php");  

?>