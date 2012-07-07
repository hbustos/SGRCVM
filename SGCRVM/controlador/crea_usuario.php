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

        if ($accion == "crea") {
                $smarty->assign('vista', $accion . "_" . $page);
                $smarty->display("index.tpl");
           if(isset($_REQUEST['id'])){
                $id = $_REQUEST['id'];
                $nombre = $_REQUEST['nombre'];
                $apellido = $_REQUEST['apellido'];
                $estado = $_REQUEST['estado'];
		
                        //--SE VALIDAN LOS DATOS--
                        if(empty($_REQUEST['id'])){
                                $smarty->assign('mensaje','Falta el id, no se crea');
                                $smarty->display("mensaje.tpl");
                        }else if(empty($_REQUEST['nombre'])){
                                $smarty->assign('mensaje','Falta el nombre, no se crea');
                                $smarty->display("mensaje.tpl");
                        }else if(empty($_REQUEST['apellido'])){
                                $smarty->assign('mensaje','Falta el apellido, no se crea');
                                $smarty->display("mensaje.tpl");
                        }else{
	                	$usu->crearUsu($id,$nombre,$apellido,$estado);
				$movimiento = $accion."->".$page."->".$id;
				$mov->insertarMov($_SESSION['id_usuario'],$movimiento);
			}
                }
        }

} else {
        $smarty->display("not_found.tpl");

}

?>

