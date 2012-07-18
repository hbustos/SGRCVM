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
           if(isset($_REQUEST['usuario'])){
                $nombre = $_REQUEST['nombre'];
                $usuario = $_REQUEST['usuario'];
                $identificacion = $_REQUEST['identificacion'];
                $clave = $_REQUEST['clave'];
                $id_jefe = $_REQUEST['id_jefe'];
                $estado = $_REQUEST['estado'];
                $tipo = $_REQUEST['tipo'];
		
                        //--SE VALIDAN LOS DATOS--
                        if(empty($_REQUEST['clave'])){
                                $smarty->assign('mensaje','Falta la clave, no se crea');
                                $smarty->display("mensaje.tpl");
                        }else if(empty($_REQUEST['nombre'])){
                                $smarty->assign('mensaje','Falta el nombre, no se crea');
                                $smarty->display("mensaje.tpl");
                        }else if(empty($_REQUEST['identificacion'])){
                                $smarty->assign('mensaje','Falta la identificacion, no se crea');
                                $smarty->display("mensaje.tpl");
                        }else{
				$clave = md5($clave);
	                	$usu->crearUsu($nombre,$usuario,$clave,$identificacion,$id_jefe,$tipo,$estado);
				$movimiento = $accion."->".$page."->".$id;
				$mov->insertarMov($_SESSION['id_usuario'],$movimiento);
			}
                }
        }

} else {
        $smarty->display("not_found.tpl");

}

?>

