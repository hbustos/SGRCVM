<?
/**
 * @file
 * valida los datos y crea la actividad
 * @author Heiber Bustos <hbf5@hotmail.com>
 * @copyright Copyright (c) 2011, HEIBER BUSTOS - RODRIGO BUSTOS
 * @version 1.0 2011-11-20
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

			//--SE COLECTAN LAS VARIABLES DEL FORM--
	           	$codigo = $_REQUEST['codigo'];
        	  	$nombre = $_REQUEST['nombre'];
           		$descripcion = $_REQUEST['descrip'];
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
                        }else if(empty($_REQUEST['responsable'])){
                                $smarty->assign('mensaje','Falta el responsable, no se crea');
                                $smarty->display("mensaje.tpl");
			}else if($fechaini == $fechafin){
				$smarty->assign('mensaje','Las fechas no pueden ser iguales, inicio:'.$fechaini.' fecha fin:'.$fechafin );
				$smarty->display("mensaje.tpl");
			}else if($fechaini > $fechafin){
				$smarty->assign('mensaje','La fecha final: '.$fechafin.' no puede ser menor a la de inicio: '.$fechaini);
				$smarty->display("mensaje.tpl");
			}else{
				$usuario = $usu->buscarUsu($responsable);
				$eta = $etapa->buscarEtapa($codigo);
				if(count($eta) > 0){
	                                if(count($usuario) > 0){
						$actividad->crearActiv($codigo,$nombre,$fechaini,$fechafin,$descripcion,$responsable);
						$movimiento = $accion."->".$page."->nombre:".$nombre;
                		               	$mov->insertarMov($_SESSION['id_usuario'],$movimiento);				
					}else{
						$smarty->assign('mensaje','El Responsable : '.$responsable.' no existe, no se crea');
	                                        $smarty->display("mensaje.tpl");
					}
				}else{
						$smarty->assign('mensaje','El  codigo de etapa : '.$codigo.' no existe, no se crea');
                                                $smarty->display("mensaje.tpl");
				}
			}
		}
	}

} else {
	$smarty->display("not_found.tpl");
	
}



?>
