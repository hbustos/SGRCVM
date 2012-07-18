<?
/**
 * @file
 * valida los datos y actualiza el usuario
 * @author Heiber Bustos <hbf5@hotmail.com>
 * @copyright Copyright (c) 2011, HEIBER BUSTOS - RODRIGO BUSTOS
 * @version 1.0 2011-11-03
 * @package proyestos
 * @category clases
 */


$smarty->assign('user',$_SESSION['id_usuario']);

if (isset($_REQUEST['page']) && isset($_REQUEST['accion'])) {
 if (($_SESSION['Permisos'] == 2) || ($_SESSION['Permisos'] == 1)){	
	$page = $_REQUEST['page'];
	$accion = $_REQUEST['accion'];

	if ($accion == "actualiza") {
		$smarty->assign('vista', $accion . "_" . $page);
                $smarty->display("index.tpl");

		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
        	  	$estado = $_REQUEST['estado'];
			$id2 = strtoupper($id);
			if($id2 == "ADMIN"){
				$smarty->assign('mensaje','El usuario Admin no se puede actualizar');
				$smarty->display("mensaje.tpl");
          		}else{
				$usu->actualizarUsu($id,$estado);
                                $movimiento = $accion."->".$page."->".$usuario;
				$mov->insertarMov($_SESSION['id_usuario'],$movimiento);
			}
		}
	}
   }else{
                                $smarty->assign('mensaje','Usted no cuenta con los permisos para esta accion');
                                $smarty->display("index.tpl");
   }

} else {
	$smarty->display("not_found.tpl");
	
}



?>
