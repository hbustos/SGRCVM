<?
/**
 * @file
 * Clase que permite la generacion de reportes de ventas(listar).
 * @author John Cetina <jcetina2@hotmail.com>
 * @copyright Copyright (c) 2011, JOHN CETINA
 * @version 1.0 2012-07-15
 * @package calidad
 * @category clases
 */

class clsRventas {

	private $db = null;
	//--Funcion para seleccionar la base de datos--
	function setDb($cn) {
		$this->db = $cn;
	}

	function listarRventas(){
		$sql = "SELECT u.NombresApellidos, p.descripcion, sum(v.unidades), v.unidades * p.valor as subtotal
		FROM ventas v
		INNER JOIN productos p 
		ON v.id_producto = p.id 
		INNER JOIN visita vi 
		ON v.id_visita = vi.id 
		INNER JOIN usuarios u 
		ON vi.id_usuario = u.id 
		WHERE v.unidades > 0
           GROUP BY p.descripcion";
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