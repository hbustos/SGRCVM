<?
/**
 * @file
 * Clase que permite la generacion de reportes de visitas(cantidades).
 * @author John Cetina <jcetina2@hotmail.com>
 * @copyright Copyright (c) 2011, JOHN CETINA
 * @version 1.0 2012-07-19
 * @package calidad
 * @category clases
 */

class clsRvisitas {

	private $db = null;
	//--Funcion para seleccionar la base de datos--
	function setDb($cn) {
		$this->db = $cn;
	}

	function listarRvisitas(){
		$sql = "SELECT v.FechaHora, u.NombresApellidos, count( v.FechaHora)
FROM visita v
INNER JOIN usuarios u ON v.Id_Usuario = u.id
WHERE v.FechaHora > 0
GROUP BY v.FechaHora";
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