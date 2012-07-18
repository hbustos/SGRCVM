<?
/**
 * @file
 * valida los datos y crea el proyecto
 * @author Heiber Bustos <hbf5@hotmail.com>
 * @copyright Copyright (c) 2011, HEIBER BUSTOS - RODRIGO BUSTOS
 * @version 1.0 2011-11-03
 * @package proyestos
 * @category clases
 */

$smarty->assign('user',$_SESSION['id_usuario']);

if (isset($_REQUEST['page']) && isset($_REQUEST['accion'])) {
	
	$page = $_REQUEST['page'];
	$accion = $_REQUEST['accion'];

	if ($accion == "crea") {
		$smarty->assign('vista', $accion . "_" . $page);
                $smarty->display("index.tpl");
		
		if(isset($_REQUEST['codigo'])){
        	  	$nombre = $_REQUEST['nombre'];
	           	$codigo = $_REQUEST['codigo'];
           		$descrip = $_REQUEST['descrip'];
        	  	$responsable = $_REQUEST['responsable'];
	             	$fechaini = $_REQUEST['fechainiYear'].'-'.$_REQUEST['fechainiMonth'].'-'.$_REQUEST['fechainiDay'];
        	     	$fechafin = $_REQUEST['fechafinYear'].'-'.$_REQUEST['fechafinMonth'].'-'.$_REQUEST['fechafinDay'];
                        //--SE VALIDAN LOS DATOS--
                        if(empty($_REQUEST['codigo'])){
                                $smarty->assign('mensaje','Falta el codigo, no se crea');
                                $smarty->display("mensaje.tpl");
                        }else if(empty($_REQUEST['nombre'])){
                                $smarty->assign('mensaje','Falta el nombre, no se crea');
                                $smarty->display("mensaje.tpl");
                        }else if(empty($_REQUEST['descrip'])){
                                $smarty->assign('mensaje','Falta la descripcion, no se crea');
                                $smarty->display("mensaje.tpl");
                        }else if($fechaini == $fechafin){
                                $smarty->assign('mensaje','Las fechas no pueden ser iguales, inicio:'.$fechaini.' fecha fin:'.$fechafin );
                                $smarty->display("mensaje.tpl");
                        }else if($fechaini > $fechafin){
                                $smarty->assign('mensaje','La fecha final: '.$fechafin.' no puede ser menor a la de inicio: '.$fechaini);
                                $smarty->display("mensaje.tpl");
                        }else if(empty($_REQUEST['responsable'])){
                                $smarty->assign('mensaje','Falta el responsable, no se crea');
                                $smarty->display("mensaje.tpl");
                        }else{
				$usuario = $usu->buscarUsu($responsable);
				if(count($usuario) > 0){
	             			$proy->crearProy($codigo,$nombre,$descrip,$fechaini,$fechafin,$responsable);
					$movimiento = $accion."->".$page."->nombre:".$nombre;
	                                $mov->insertarMov($_SESSION['id_usuario'],$movimiento);
					
				}else{
					$smarty->assign('mensaje','El Responsable : '.$responsable.' no existe, no se crea');	
					$smarty->display("mensaje.tpl");
				}
                        }

		}
	}

} else {
	$smarty->display("not_found.tpl");
	
}



?>
