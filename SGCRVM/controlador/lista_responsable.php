<?
/**
 * @file
 * informe lista de responsables
 * @author Heiber Bustos <hbf5@hotmail.com>
 * @copyright Copyright (c) 2011, HEIBER BUSTOS - RODRIGO BUSTOS
 * @version 1.0 2011-11-07
 * @package proyestos
 * @category clases
 */


$smarty->assign('user',$_SESSION['id_usuario']);


if (isset($_REQUEST['page']) && isset($_REQUEST['accion'])) {
	
	$page = $_REQUEST['page'];
	$accion = $_REQUEST['accion'];
	if ($accion == "lista") {
                $ret = $informe->listarResponProy();
                $smarty->assign('array',$ret);

                $ret2 = $informe->listarResponEtapa();
                $smarty->assign('array2',$ret2);

                $ret3 = $informe->listarResponActiv();
                $smarty->assign('array3',$ret3);
	
		$smarty->assign('vista', $accion . "_" . $page);
                $smarty->display("index.tpl");
	}

} else {
	$smarty->display("not_found.tpl");
	
}



?>
