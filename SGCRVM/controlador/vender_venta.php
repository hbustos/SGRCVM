<?

$smarty->assign('user',$_SESSION['id_usuario']);
$smarty->assign('id',$_SESSION['id']);

if (isset($_REQUEST['page']) && isset($_REQUEST['accion'])) {
	
	$page = $_REQUEST['page'];
	$accion = $_REQUEST['accion'];

	if ($accion == "vender") {
		//--Llamo la funcion que trae los usuarios al array ret--
                $ret = $cliente->listarClientes();
                $ret2 = $inventario->listarInventario();
		//print_r($ret2[0][0]);
                $smarty->assign('array',$ret);
                $smarty->assign('array2',$ret2);
		// EN LAS VISTAS DEBEMOS CREAR ENTONCES lista_usuario.tpl
		$smarty->assign('vista', $accion . "_" . $page);
                $smarty->display("index.tpl");

		if(isset($_REQUEST['cantidad'])){
                	$cantidad = $_REQUEST['cantidad'];
			$fecha = $_REQUEST['fechainiYear'].'-'.$_REQUEST['fechainiMonth'].'-'.$_REQUEST['fechainiDay'];
			$id_cliente = $_REQUEST['id_cliente'];
			$id_producto = $_REQUEST['id_producto'];
                        //--SE VALIDAN LOS DATOS--
                        if(empty($_REQUEST['cantidad'])){
                                $smarty->assign('mensaje','Falta la cantidad no se crea la venta');
                                $smarty->display("mensaje.tpl");
                        }else if(is_numeric($_REQUEST['cantidad'])){
				$cant = $inventario->consultarCantidad($id_producto);
				echo $cant;
				if($cantidad > $cant){
					$smarty->assign('mensaje','La cantidad es superior al inventario actual, no se crea la venta');
	                                $smarty->display("mensaje.tpl");
				}else{
					$inventario->vender(11,$id_producto,$cantidad);
        	                        $movimiento = $accion."->".$page."->".$id;
                	                $mov->insertarMov($_SESSION['id_usuario'],$movimiento);
				}
                        }else{
				$smarty->assign('mensaje','La cantidad no es un numero no se crea la venta');
                                $smarty->display("mensaje.tpl");
                        }
		}

	}

} else {
	$smarty->display("not_found.tpl");
	
}



?>
