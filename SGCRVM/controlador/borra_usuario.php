<?
$smarty->assign('user',$_SESSION['id_usuario']);


if (isset($_REQUEST['page']) && isset($_REQUEST['accion'])) {
 if (($_SESSION['Permisos'] == 2) || ($_SESSION['Permisos'] == 1)){	
	$page = $_REQUEST['page'];
	$accion = $_REQUEST['accion'];

	if ($accion == "borra") {
		$smarty->assign('vista', $accion . "_" . $page);
                $smarty->display("index.tpl");
	
		if(isset($_REQUEST['id'])){
           		$id = $_REQUEST['id'];
			$id2 = strtoupper($id);
			if($id2 == "ADMIN"){
				$smarty->assign('mensaje','El usuario Admin no se puede borrar');
				$smarty->display("mensaje.tpl");	
			}else{
	             		$usu->borrarUsu($id);
				$movimiento = $accion."->".$page."->".$id;
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
