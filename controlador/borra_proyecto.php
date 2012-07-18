<?
$smarty->assign('user',$_SESSION['id_usuario']);


if (isset($_REQUEST['page']) && isset($_REQUEST['accion'])) {
	
	$page = $_REQUEST['page'];
	$accion = $_REQUEST['accion'];

	if ($accion == "borra") {
		$smarty->assign('vista', $accion . "_" . $page);
                $smarty->display("index.tpl");
		if(isset($_REQUEST['codigo'])){
           		$codigo = $_REQUEST['codigo'];
	             	$proy->borrarProy($codigo);
			$movimiento = $accion."->".$page."->nombre:".$codigo;
                        $mov->insertarMov($_SESSION['id_usuario'],$movimiento);
		}
	}

} else {
	$smarty->display("not_found.tpl");
	
}



?>
