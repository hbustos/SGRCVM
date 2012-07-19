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
				$fecha = $_REQUEST['fechaAno'].'-'.$_REQUEST['fechaMes'].'-'.$_REQUEST['fechaDia'].' '.$_REQUEST['horaHora'].':'.$_REQUEST['horaMinuto'].':00';
				$visita = $_REQUEST['codVisita'];
				$estado = $_REQUEST['estado'];
                        //--SE VALIDAN LOS DATOS--
                        if(empty($_REQUEST['codigo'])){
                                $smarty->assign('mensaje','Falta el codigo, no se crea');
                                $smarty->display("mensaje.tpl");
                        }else if(empty($_REQUEST['nombre'])){
                                $smarty->assign('mensaje','Falta el nombre, no se crea');
                                $smarty->display("mensaje.tpl");
						}else if(empty($_REQUEST['codVisita'])){
                                $smarty->assign('mensaje','Falta el responsable, no se crea');
                                $smarty->display("mensaje.tpl");
                        }else{
	
	             			$proy->crearProy($codigo,$nombre,$fecha,$visita,$estado);
					$movimiento = $accion."->".$page."->nombre:".$nombre;
	                                $mov->insertarMov($_SESSION['id_usuario'],$movimiento);
                        }

		}
	}

} else {
	$smarty->display("not_found.tpl");
	
}



?>
