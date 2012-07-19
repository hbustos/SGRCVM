<?
/**
 * @file
 * valida los datos y crea el usuario
 * @author Heiber Bustos <hbf5@hotmail.com>
 * @copyright Copyright (c) 2011, HEIBER BUSTOS - RODRIGO BUSTOS
 * @version 1.0 2011-10-20
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

		if(isset($_REQUEST['codigo'])){
			$codigo = $_REQUEST['codigo'];
        	  	$estado = $_REQUEST['estado'];
				$usuario = $_REQUEST['usuario'];
				$fecha = $_REQUEST['fechaAno'].'-'.$_REQUEST['fechaMes'].'-'.$_REQUEST['fechaDia'].' '.$_REQUEST['horaHora'].':'.$_REQUEST['horaMinuto'].':00';
          		$proy->actualizarProy($codigo,$estado,$usuario,$fecha);
			$movimiento = $accion."->".$page."->nombre:".$codigo;
                      	$mov->insertarMov($_SESSION['id_usuario'],$movimiento);
		}
	}

} else {
	$smarty->display("not_found.tpl");
	
}



?>
