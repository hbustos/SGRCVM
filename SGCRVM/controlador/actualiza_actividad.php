<?
/**
 * @file
 * valida los datos y actualiza la actividad
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

	if ($accion == "actualiza") {
		$smarty->assign('vista', $accion . "_" . $page);
                $smarty->display("index.tpl");

		if(isset($_REQUEST['nombre'])){
			$nombre = $_REQUEST['nombre'];
        	  	$estado = $_REQUEST['estado'];
        	  	$porcen = $_REQUEST['porcen'];

			if(empty($_REQUEST['nombre'])){
                                $smarty->assign('mensaje','Falta el nombre, no se actualiza');
                                $smarty->display("mensaje.tpl");
                        }else if(empty($_REQUEST['porcen'])){
                                $smarty->assign('mensaje','Falta el porcentaje, no se actualiza');
                                $smarty->display("mensaje.tpl");
			}else if(is_numeric($_REQUEST['porcen'])){
				$act = $actividad->buscarActiv($nombre);
				$codigo = $act[0][0];
				if(count($act) > 0){
					//--SE ACTUALIZA LA ACTIVIDAD--
	          			$actividad->actualizarActiv($nombre,$estado,$porcen);
					//--SE ACTUALIZA EL PORCENTAJE DE LA ETAPA--
					//print_r($act);echo $codigo;
					$actividad->actualizaPorcen($codigo);
					
					//--SE INSERTA EL MOVIMIENTO--
					$movimiento = $accion."->".$page."->nombre:".$nombre;
                                       	$mov->insertarMov($_SESSION['id_usuario'],$movimiento);
				}else{
					$smarty->assign('mensaje','La actividad : '.$nombre.' no existe, no se actualiza');
	                                $smarty->display("mensaje.tpl");
				}
			}else{
				$smarty->assign('mensaje','El porcentaje : '.$porcen.' no es un numero, no se actualiza');
                                $smarty->display("mensaje.tpl");
			}
		}
	}

} else {
	$smarty->display("not_found.tpl");
	
}



?>
