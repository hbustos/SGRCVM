<?
$smarty->assign('user',$_SESSION['id_usuario']);
$smarty->assign('id',$_SESSION['id']);

if (isset($_REQUEST['page']) && isset($_REQUEST['accion'])) {


	if (($_SESSION['Permisos'] == 5) || ($_SESSION['Permisos'] == 1)){	
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
				$fecha = $_REQUEST['fechaYear'].'-'.$_REQUEST['fechaMonth'].'-'.$_REQUEST['fechaDay'];
				$id_cliente = $_REQUEST['id_cliente'];
				$id_producto = $_REQUEST['id_producto'];
                	        //--SE VALIDAN LOS DATOS--
                        	if(empty($_REQUEST['cantidad'])){
                                	$smarty->assign('mensaje','Falta la cantidad no se crea la venta');
	                                $smarty->display("mensaje.tpl");
        	                }else if(is_numeric($_REQUEST['cantidad'])){
					$cant = $inventario->consultarCantidad($id_producto);
					//echo "SIIIIIIIIIII 0 ".$cant[0][0]." 1 ". $cant[0][1]." 2 ".$cant[0][2];	
					if($cantidad > $cant[0][0]){
						$smarty->assign('mensaje','La cantidad es superior al inventario actual, no se crea la venta. ');
		                                $smarty->display("mensaje.tpl");
					}else if($cantidad < 1){
						$smarty->assign('mensaje','La cantidad es menor a cero, no se crea la venta. ');
	                	                $smarty->display("mensaje.tpl");
					}else{
						$inventario->vender(11,$id_producto,$cantidad,$fecha);
						$cantidad = ($cant[0][0] - $cantidad);
						$inventario->actualizarInventario($cant[0][1] + 1,$cantidad,$id_producto);
        		                        $movimiento = $accion."->".$page."->".$usuario;
                		                $mov->insertarMov($_SESSION['id_usuario'],$movimiento);
					}
	                        }else{
					$smarty->assign('mensaje','La cantidad no es un numero no se crea la venta');
                	                $smarty->display("mensaje.tpl");
                        	}
			}	
		}
	}else{
				$smarty->assign('mensaje','Usted no tiene permisos para esta accion');
				$smarty->display("index.tpl");
	}
} else {
	$smarty->display("not_found.tpl");
}
?>
