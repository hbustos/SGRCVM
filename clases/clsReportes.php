<?
/**
 * @file
 * Clase que permite la generacion de reportes de ruta con fecha    de visita(listar).
 * @author John Cetina <jcetina2@hotmail.com>
 * @copyright Copyright (c) 2011, JOHN CETINA
 * @version 1.0 2012-07-14
 * @package calidad
 * @category clases
 */

class clsReportes {

	private $db = null;
	//--Funcion para seleccionar la base de datos--
	function setDb($cn) {
		$this->db = $cn;
	}

	function listarReportes(){
		$sql = "SELECT ruta.FechaHora,usuarios.NombresApellidos
		FROM ruta, usuarios
		WHERE ruta.id_usuario = usuarios.Id
		and ruta.FechaHora > 0";
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