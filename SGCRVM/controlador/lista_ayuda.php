<?



if (isset($_REQUEST['page']) && isset($_REQUEST['accion'])) {
	

		$smarty->assign('vista', $accion . "_" . $page);
                $smarty->display("index.tpl");

} else {
	$smarty->display("not_found.tpl");
	
}



?>
