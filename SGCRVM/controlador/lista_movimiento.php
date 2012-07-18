<?
/**
 * @file
 * lista los movimientos
 * @author Heiber Bustos <hbf5@hotmail.com>
 * @copyright Copyright (c) 2011, HEIBER BUSTOS - RODRIGO BUSTOS
 * @version 1.0 2011-11-06
 * @package proyestos
 * @category clases
 */


$smarty->assign('user',$_SESSION['id_usuario']);


if (isset($_REQUEST['page']) && isset($_REQUEST['accion'])) {
	
	$page = $_REQUEST['page'];
	$accion = $_REQUEST['accion'];

	if ($accion == "lista") {
		//--Llamo la funcion que trae los usuarios al array ret--
                $ret = $mov->listarMov();
                $smarty->assign('array',$ret);
		// EN LAS VISTAS DEBEMOS CREAR ENTONCES lista_usuario.tpl
		$smarty->assign('vista', $accion . "_" . $page);
                $smarty->display("index.tpl");
	}

} else {
	$smarty->display("not_found.tpl");
	
}



?>
