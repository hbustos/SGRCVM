<?
$smarty->assign('user',$_SESSION['id_usuario']);
$smarty->assign('id',$_SESSION['id']);

if (isset($_REQUEST['page']) && isset($_REQUEST['accion'])) {

        if (($_SESSION['Permisos'] == 4 ) || ($_SESSION['Permisos'] == 1)){
                
		$page = $_REQUEST['page'];
                $accion = $_REQUEST['accion'];
			//echo $accion.$page;

                if ($accion == "asigna") {	
                        $smarty->assign('vista', $accion . "_" . $page);
                        $smarty->display("index.tpl");
		}

	}
	else{
               		$smarty->assign('mensaje','Usted no tiene permisos para esta accion');
                      	$smarty->display("index.tpl");
        	}	
	}else {
        	$smarty->display("not_found.tpl");
	}

?>

