<?

$smarty->assign('user',$_SESSION['id_usuario']);


if (isset($_REQUEST['page']) && isset($_REQUEST['accion'])) {
	
	$page = $_REQUEST['page'];
	$accion = $_REQUEST['accion'];

	if ($accion == "lista") {
		//--Llamo la funcion que trae los datos de visitas por dia ret--
                $ret = $rvisitas->listarRvisitas();
		//print_r($ret);
                $smarty->assign('array',$ret);
		// EN LAS VISTAS DEBEMOS CREAR ENTONCES lista_rvisitas.tpl
		$smarty->assign('vista', $accion . "_" . $page);
                $smarty->display("index.tpl");
	}

} else {
	$smarty->display("not_found.tpl");
	
}

?>