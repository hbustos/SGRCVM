<?
/**
 * @file
 * Clase que permite la administracion de los movimientos (listar, insertar).
 * @author Heiber Bustos <hbf5@hotmail.com>
 * @copyright Copyright (c) 2011, HEIBER BUSTOS - RODRIGO BUSTOS
 * @version 1.0 2011-10-20
 * @package proyestos
 * @category clases
 */

class clsMovimiento {

	private $db = null;
	//--Funcion para seleccionar la base de datos--
	function setDb($cn) {
		$this->db = $cn;
	}

	function listarMov(){
		$sql = "SELECT * FROM movimientos";
		$ret = $this->db->consulta($sql);

		if ($ret === FALSE){
			return FALSE;
		}else{
			return $ret;
		}
	}
	

	function insertarMov($id,$movimiento){
		$sql ="INSERT INTO movimientos (FechaMovimiento, IdMovimiento, Movimiento) VALUES (NOW(),'$id', '$movimiento')";
		$ret = $this->db->consulta($sql);
		if($ret === FALSE){
			return FALSE;	
		}else{
			return TRUE;
		}
	}
	

}

?>
