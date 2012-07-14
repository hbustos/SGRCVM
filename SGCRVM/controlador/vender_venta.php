<?

$smarty->assign('user',$_SESSION['id_usuario']);


if (isset($_REQUEST['page']) && isset($_REQUEST['accion'])) {
	
	$page = $_REQUEST['page'];
	$accion = $_REQUEST['accion'];

	if ($accion == "vender") {
		//--Llamo la funcion que trae los usuarios al array ret--
                $ret = $cliente->listarClientes();
                $ret2 = $inventario->listarInventario();
		//print_r($ret);
                $smarty->assign('array',$ret);
                $smarty->assign('array2',$ret2);
		// EN LAS VISTAS DEBEMOS CREAR ENTONCES lista_usuario.tpl
		$smarty->assign('vista', $accion . "_" . $page);
                $smarty->display("index.tpl");
	}

} else {
	$smarty->display("not_found.tpl");
	
}



?>
