<?
/**
 * @file
 * borra la etapa seleccionada	
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

	if ($accion == "borra") {
		$smarty->assign('vista', $accion . "_" . $page);
                $smarty->display("index.tpl");
		if(isset($_REQUEST['codigo'])){
           		$codigo = $_REQUEST['codigo'];
	             	$etapa->borrarEtapa($codigo);
			$movimiento = $accion."->".$page."->".$codigo;
                        $mov->insertarMov($_SESSION['id_usuario'],$movimiento);
		}
	}

} else {
	$smarty->display("not_found.tpl");
	
}



?>
