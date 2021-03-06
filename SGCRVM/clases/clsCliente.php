<?
/**
 * @file
 * Clase que permite la administracion de clientes (listar).
 * @author Heiber Bustos <hbf5@hotmail.com>
 * @copyright Copyright (c) 2011, HEIBER BUSTOS
 * @version 1.0 2012-07-10
 * @package calidad
 * @category clases
 */

class clsCliente {

	private $db = null;
	//--Funcion para seleccionar la base de datos--
	function setDb($cn) {
		$this->db = $cn;
	}

	function listarClientes(){
		$sql = "SELECT * 
			FROM clientes 
			ORDER BY RazonSocial ASC";
		//echo $sql;
		$ret = $this->db->consulta($sql);

		if ($ret === FALSE){
			return FALSE;
		}else{
			return $ret;
		}
	}
}

?>
