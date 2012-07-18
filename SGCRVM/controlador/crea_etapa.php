<?
/**
 * @file
 * valida los datos y crea la etapa 
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

	if ($accion == "crea") {
		$smarty->assign('vista', $accion . "_" . $page);
                $smarty->display("index.tpl");
		
		if(isset($_REQUEST['codigo'])){

			//--SE COLECTAN LAS VARIABLES DEL FORM--
	           	$codigo = $_REQUEST['codigo'];
	           	$codigopro = $_REQUEST['codigopro'];
        	  	$nombre = $_REQUEST['nombre'];
           		$descripcion = $_REQUEST['descripcion'];
           		$peso = $_REQUEST['peso'];
           		$responsable = $_REQUEST['responsable'];
	
			//--SE VALIDAN LOS DATOS--
			if(empty($_REQUEST['codigo'])){
                                $smarty->assign('mensaje','Falta el codigo, no se crea');
                                $smarty->display("mensaje.tpl");
                        }else if(empty($_REQUEST['codigopro'])){
                                $smarty->assign('mensaje','Falta el codigo de proyecto, no se crea');
                                $smarty->display("mensaje.tpl");
			}else if(empty($_REQUEST['nombre'])){
                                $smarty->assign('mensaje','Falta el nombre, no se crea');
                                $smarty->display("mensaje.tpl");				
                        }else if(empty($_REQUEST['descripcion'])){
                                $smarty->assign('mensaje','Falta la descripcion, no se crea');
                                $smarty->display("mensaje.tpl");			
                        }else if(empty($_REQUEST['responsable'])){
                                $smarty->assign('mensaje','Falta el responsable, no se crea');
                                $smarty->display("mensaje.tpl");
                        }else if(empty($_REQUEST['peso'])){
                                $smarty->assign('mensaje','Falta el peso porcentual, no se crea');
                                $smarty->display("mensaje.tpl");
			//--SE VALIDA QUE EL PESO Y PORCENTAJE SEAN NUMEROS--
                        }else if(is_numeric($_REQUEST['peso'])){

					$proyecto = $proy->buscarProy($codigopro);
                                	$usuario = $usu->buscarUsu($responsable);

					if(count($proyecto) > 0){
	                                	if(count($usuario) > 0){
        	                                	$etapa->crearEtapa($codigo,$codigopro,$nombre,$descripcion,$porcen,$peso,$responsable);
	                	                        $movimiento = $accion."->".$page."->nombre:".$nombre;
        	                	                $mov->insertarMov($_SESSION['id_usuario'],$movimiento);
                	                	}else{
                        	                	$smarty->assign('mensaje','El Responsable : '.$responsable.' no existe, no se crea');
	                        	                $smarty->display("mensaje.tpl");
        	                        	}
					}else{
						$smarty->assign('mensaje','El  codigo de proyecto : '.$codigopro.' no existe, no se crea');
                                              	$smarty->display("mensaje.tpl");
					}
				

			}else{
                                $smarty->assign('mensaje','El porcentaje: '.$porcen.' y el peso: '.$peso.' deben ser numeros (use punto para decimales), no se crea');
                                $smarty->display("mensaje.tpl");
			}
		}
	}
} else {
	$smarty->display("not_found.tpl");
	
	}

?>
