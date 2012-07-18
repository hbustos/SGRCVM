<?
/** * @file
.
 * @author Heiber Bustos - Rodrigo Bustos <hbf5@hotmail.com>
 * @copyright Copyright (c) 2011, HEIBER BUSTOS - RODRIGO BUSTOS
 * @version 1.0 2011-10-15
 * @package proyestos
 * @category clases
 */


ini_set('display_errors',0);
error_reporting(E_ALL);

setlocale (LC_TIME,"spanish");

include('smarty/libs/Smarty.class.php');
include('clases/clsDatabase.php');
include('clases/clsAuth.php');
include('clases/clsMovimiento.php');
include('clases/clsUsuario.php');
include('clases/clsActividad.php');
include('clases/clsEtapa.php');
include('clases/clsInforme.php');
include('clases/clsProyecto.php');

include('clases/clsCliente.php');
include('clases/clsInventario.php');

$auth = new clsAuth();
$usu = new clsUsuario();
$proy = new clsProyecto();
$actividad = new clsActividad();
$etapa = new clsEtapa();
$mov = new clsMovimiento();
$informe = new clsInforme();
$auth->setDb($database);
$usu->SetDb($database);
$proy->SetDb($database);
$actividad->SetDb($database);
$etapa->SetDb($database);
$mov->SetDb($database);
$informe->SetDb($database);
$smarty = new Smarty();
$cliente = new clsCliente();
$cliente->SetDb($database);
$inventario = new clsInventario();
$inventario->SetDb($database);


if ($auth->logueado()) {
	if (isset($_REQUEST['logout'])) {
		$auth->logout();
		$smarty->display('login.tpl');
		die();
	}

	if (isset($_REQUEST['page'])) {

		$page = $_REQUEST['page'];

		if (isset($_REQUEST['accion'])) {
			$accion = $_REQUEST['accion'];
		} else {
			$accion = "lista";
		}

		if (is_file('controlador/' . $accion . "_" . $page . ".php")) {
			include('controlador/' . $accion . "_" . $page . ".php");
		//	print_r($_SESSION);
		} else {
			$smarty->display("not_found.tpl");
		}

	} else {
               	$smarty->assign('user',$_SESSION['id_usuario']);
		$smarty->display("index.tpl");
	}
} else {
        //--Validacion de login--
        if (isset($_REQUEST['login'])) {
		
                //echo $_REQUEST['txtUsuario'];
                //echo $_REQUEST['txtClave'];
		$clave = md5($_REQUEST['txtClave']);
	
                $ret = $auth->login($user = $_REQUEST['txtUsuario'],$clave);
		
                if ($ret == TRUE) {
			$ret2 = Array();
			
			$ret2 = $usu->buscarUsu($user);
			$_SESSION['id'] = $ret2[0][0];
			//echo "ID DEL USUARIO ".$ret2[0][0].$SESSION['id'];
               		$smarty->assign('user',$_SESSION['id_usuario']);
               		$smarty->assign('id',$_SESSION['id']);
                        $smarty->display('index.tpl');

                } else if($_SESSION['estado_usuario'] == 2){
                        $smarty->assign('mensaje','Usuario inactivo consulte al administrador');
                        $smarty->display('login.tpl');
                        $_SESSION['estado_usuario'] = 3;
                }else{
                        $smarty->assign('mensaje', 'Usuario o clave invalido');
                        $smarty->display('login.tpl');
                }
        } else {

                $smarty->display('login.tpl');
        }
}
?>
