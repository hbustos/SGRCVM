<?
/**
 * @file
 * lista las actividades
 * @author Heiber Bustos <hbf5@hotmail.com>
 * @copyright Copyright (c) 2011, HEIBER BUSTOS - RODRIGO BUSTOS
 * @version 1.0 2011-11-05
 * @package proyestos
 * @category clases
 */

$smarty->assign('user',$_SESSION['id_usuario']);


if (isset($_REQUEST['page']) && isset($_REQUEST['accion'])) {
	
	$page = $_REQUEST['page'];
	$accion = $_REQUEST['accion'];
	if ($accion == "lista") {
                $ret = $actividad->listarActiv();
                $smarty->assign('array',$ret);
		$smarty->assign('vista', $accion . "_" . $page);
                $smarty->display("index.tpl");
	}

} else {
	$smarty->display("not_found.tpl");
	
}



?>
